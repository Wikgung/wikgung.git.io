<?php

namespace App\Controllers;

use App\Models\komentarmodel;
use App\Models\contentmodel;
use App\Models\galconmodel;

class Home extends BaseController
{
    public function index()
    {
        $menuActive = "home";
        $content = new contentmodel();
        $allcontent = $content->findAll();
        $komentar = new komentarmodel();
        $allkomentar = $komentar->findAll();
        return view('home', ['allkomentar' => $allkomentar, 'allcontent' => $allcontent, 'menuActive' => $menuActive]);
    }
    public function addcontent()
    {
        $id = session()->get('id');
        $menuActive = "Home";
        $content = new contentmodel();
        $allcontent = $content->findAll();
        return view('addcontent', [
            'allcontent' => $allcontent,
            'content' => $content->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function prosesaddcontent()
    {
        $content = new contentmodel();
        $content->insert([
            'judul' => $this->request->getPost('judul'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to('home')->with('success', 'Data Added Successfully');
    }

    public function editcontent($id)

    {
        $content = new contentmodel();
        $menuActive = "home";
        $content = $content->where([
            'id' => $id
        ])->first();
        return view('editcontent', ['content' => $content, 'menuActive' => $menuActive]);
    }

    public function proseseditcontent($id)
    {
        $content = new contentmodel();

        $content->update($id, [
            'judul' => $this->request->getPost('judul'),
            'content' => $this->request->getPost('content'),

        ]);
        return redirect()->to('home')->with('success', 'Data Updated Successfully');
    }










    public function komentarin()
    {
        helper(['form']);
        $rules = [
            'nama' => 'required|min_length[3]|max_length[20]',
            'isi' => 'required|min_length[6]|max_length[200]',
        ];

        if ($this->validate($rules)) {
            $model = new komentarmodel();

            $data = [
                'nama' => $this->request->getVar('nama'),
                'isi' => $this->request->getVar('isi')
            ];
            $model->save($data);
            return redirect()->to(base_url('home'));
        }
    }
    public function delete($id)
    {
        $komentar = new komentarmodel();

        $komentar->delete($id);

        return redirect()->to('home')->with('success', 'Data Deleted Successfully');
    }

    public function galeri()
    {
        $galeri = new galconmodel();
        $menuActive = "galeri";
        $allgaleri = $galeri->findAll();


        return view('galeri', ['allgaleri' => $allgaleri, 'galeri' => $galeri, 'menuActive' => $menuActive]);
    }
    public function addgaleri()
    {
        $id = session()->get('id');
        $menuActive = "galeri";
        $galeri = new galconmodel();
        $allgaleri = $galeri->findAll();

        return view('addgaleri', [
            'allgaleri' => $allgaleri,
            'galeri' => $galeri->find($id),
            'menuActive' => $menuActive,
        ]);
    }
    public function prosesaddgaleri()
    {
        $foto = '';
        // $cekfoto = session() ->get('foto');
        $galeri = new galconmodel();
        $img = $this->request->getFile('foto');
        if ($img->isValid()) {
            $newname = $img->getRandomName();
            $foto = $newname;
            $img->move('assets/upload', $newname);
        }

        $galeri->insert([
            'foto' => $foto,
            'keterangan' => $this->request->getPost('keterangan'),

        ]);
        return redirect()->to('home/galeri')->with('success', 'Data Updated Successfully');
    }
    public function editgalcon($id)
    {
        $galeri = new galconmodel();
        $menuActive = "kontak";
        $galeri = $galeri->where([
            'id' => $id
        ])->first();
        return view('editgalcon', ['galeri' => $galeri, 'menuActive' => $menuActive]);
    }
    public function proseseditgaleri($id)
    {
        $galeri = new galconmodel();
        # defaultnya jika pengguna ngga memasukkan gambar
        $foto = '';
        $cekfoto =  $galeri->where(['id' => $id])->first();
        # Cek apakah pengguna memaukkan gambar
        $img = $this->request->getFile('foto');
        if ($img->isValid()) {
            # Jika pengguna memasukkan gambar
            $newname = $img->getRandomName();
            $foto = $newname;
            $img->move('assets/upload', $newname);
        } else {
            $foto = $cekfoto->foto;
        }

        $galeri->update($id, [
            'foto' => $foto,
            'keterangan' => $this->request->getPost('keterangan'),


        ]);

        return redirect()->to('home/galeri')->with('success', 'Data Updated Successfully');
    }
    public function deletegal($id)
    {
        $galeri = new galconmodel();

        $galeri->delete($id);

        return redirect()->to('home/galeri')->with('success', 'Data Deleted Successfully');
    }

    public function lokasi()
    {
        $menuActive = "lokasi";

        return view('lokasi', ['menuActive' => $menuActive]);
    }
}
