<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use Input;
use App\Models\User;
use App\Models\Order;

class HomeController extends Controller
{
	protected $data = array();
    public function index()
    {	
        $this->data['username'] = "";
        $this->data['password'] = "";
        $this->data['orders'] = Order::get();
        if(Auth::check())
        {
            $this->data['username'] = Auth::user()->username;
            $this->data['password'] = Auth::user()->password;
        }
        return view('pages.home',$this->data);
    }

    public function login()
    {
    	if (Request::isMethod('post'))
    	{
    		$credentials = Input::only('username','password');
            $this->data['username'] = Input::get('username');
            if (Auth::attempt($credentials,true))
            {
                $this->data['orders'] = Order::get();
                return view('pages.home',$this->data);
            }
           
            return view('login');
    	}

    	else if (Request::isMethod('get'))
    	{
            if (Auth::check())
            {
                $this->data['orders'] = Order::get();
                return view('pages.home', $this->data);
            }

    		return view('login');
    	}
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }

    public function main(){
        return view('pages.index');
    }

    public function verifikasi($id){
        Order::where('id', $id)->update(array(
            'flag_pengiriman' => '1'
        ));
        $this->data['orders'] = Order::get();
        return redirect('login');
    }

    public function detail($id){
        $this->data['order'] = Order::find($id);
        return view('pages.detail',$this->data);
    }

    public function order(){
        if (Request::isMethod('post'))
        {
            $data = Input::all();
            $current_date = date('Y-m-d H:i:s');
            Order::insertGetId(array(
                    'nama' => $data['nama'], 
                    'alamat' => $data['alamat'], 
                    'no_telp' => $data['no_telp'], 
                    'waktu' => $current_date,
                    'kode_pos' => $data['kode_pos'],
            ));
            $noOrder = Order::max('id');
            return view('pages.showNoOrder',compact('noOrder'));
        }
        
    }

    public function upload(){
        if (Request::isMethod('get'))
        {
           return view('pages.noOrder');
        }
        else if (Request::isMethod('post')) {
            $data = Input::all();
            if (empty($_FILES['imginp']['name'])) {
                return redirect('uploadBukti?status=gagal');
            }

            /*if (is_uploaded_file($_FILES['imginp']['name']))*/
            else
            {
                $name = $_FILES['imginp']['name'];
                $test = pathinfo($name, PATHINFO_FILENAME);
                $target_dir = "upload/";
                $original_name = $test;
                $imageFileType = pathinfo($name,PATHINFO_EXTENSION);
                //$target_file = $target_dir . basename($_FILES["imginp"]["name"]);
                
                $uploadOk = 1;
                
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["imginp"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                        return redirect('uploadBukti?status=gagal');
                    }
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    return redirect('uploadBukti?status=gagal');
                }
                // Check if file already exists
                $i = 1;
                while (file_exists($target_dir.$test.".".$imageFileType)) {
                    $test = (string)$original_name.$i;
                    $name = $test.".".$imageFileType;
                    $i++;
                }
                $target_file = $target_dir.$name;
                // Check file size
                if ($_FILES["imginp"]["size"] > 200000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                    return redirect('uploadBukti?status=gagal');
                }
                // Allow certain file formats
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    return redirect('uploadBukti?status=gagal');
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["imginp"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["imginp"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        return redirect('uploadBukti?status=gagal');
                    }
                }
                $target_file_final = $target_file;

                Order::where('id', $data['idOrder'])->update(array(
                    'bukti_transfer' => $target_file_final, 
                    'flag_bukti_transfer' => '1'
                ));
                return redirect('uploadBukti?status=sukses');
            }
        }
        
    }
}
