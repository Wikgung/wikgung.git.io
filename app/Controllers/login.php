<?php

namespace App\Controllers;


use App\Models\loginmodel;

class login extends BaseController
{

    public function login()
    {
        return view('login');
    }
    public function proseslogin()
    {
        $session = session();
        $model = new loginmodel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data->id,
                    'nama' => $data->nama,
                    'username' => $data->username,
                    'email'    => $data->email,
                    'level'    => $data->level,
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('home'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('login/login'));
            }
        } else {
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to(base_url('login/login'));
        }
    }

    public function prosesgantipassword($id)
    {
        $session = session();
        $model = new loginmodel();
        $password = $this->request->getVar('password');
        $newpassword = $this->request->getVar('newpassword');
        $renewpassword = $this->request->getVar('renewpassword');
        $data = $model->where('id', $id)->first();
        if ($data) {
            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                if ($newpassword == $renewpassword) {
                    $user = new loginmodel();
                    $user->update($id, [
                        'password' => password_hash($this->request->getVar('newpassword'), PASSWORD_DEFAULT)
                    ]);
                } else {
                    $session->setFlashdata('msg', 'password baru tidak sama');
                }
            } else {
                $session->setFlashdata('msg', 'password lama salah');
            }
        } else {
            $session->setFlashdata('msg', 'akun tidak ditemukan');
        }
        return redirect()->to(base_url('login/userprofile'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login/login'));
    }



    public function registrasi()
    {
        return view('registrasi');
    }

    public function prosesregistrasi()
    {
        //  return $this->request->getVar('username');

        helper(['form']);
        $rules = [
            'nama' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]',
            'password' => 'required|min_length[6]|max_length[200]',
        ];

        if ($this->validate($rules)) {
            $model = new loginmodel();
            $data = [
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to(base_url('login/login'));
        } else {
            $data['validation'] = $this->validator;
            return view('registrasi', $data);
        }
    }
    public function userprofile()
    {
        $id = session()->get('id');
        $menuActive = "profile";
        $userprofile = new loginmodel();
        $alluserprofile = $userprofile->findAll();
        return view('userprofile', [
            'alluserprofile' => $alluserprofile,
            'userprofile' => $userprofile->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function update($id)
    {
        $foto = '';
       // $cekfoto = session() ->get('foto');
        $userprofile = new loginmodel();
        $cekfoto =  $userprofile->where(['id' => $id])->first();
        $img = $this->request->getFile('foto');
        if ($img->isValid()) {
            $newname = $img->getRandomName();
            $foto = $newname;
            $img->move('assets/upload', $newname);
        } else {
            $foto = $cekfoto ->foto;
        }
        $cekfoto =  $userprofile->where(['id' => $id])->first();

        if ($cekfoto->foto != "") {
            @unlink('assets/upload' . $cekfoto->foto);
        }

        $userprofile->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'foto' => $foto,
        ]);
        return redirect()->to('login/userprofile')->with('success', 'Data Updated Successfully');
    }
}
