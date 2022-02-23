<?php

namespace App\Controllers;

use App\Models\pemangkumodel;
use App\Models\tokohadatmodel;

class kontak extends BaseController
{
    public function pemangku()
    {
        $menuActive = "kontak";

        $pemangku = new pemangkumodel();
        $allpemangku = $pemangku->findAll();
        return view('pemangku', ['allpemangku' => $allpemangku, 'menuActive' => $menuActive]);
    }
    public function add()
    {
        $id = session()->get('id');
        $menuActive = "kontak";
        $pemangku = new pemangkumodel();
        $allpemangku = $pemangku->findAll();
        return view('addpemangku', [
            'allpemangku' => $allpemangku,
            'pemangku' => $pemangku->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function prosesadd()
    {
        $pemangku = new pemangkumodel();
        $pemangku->insert([
            'nama' => $this->request->getPost('nama'),
            'kontak' => $this->request->getPost('kontak'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('kontak/pemangku')->with('success', 'Data Added Successfully');
    }
    public function editpemangku($id)
    {
        $pemangku = new pemangkumodel();
        $menuActive = "kontak";
        $pemangku = $pemangku->where([
            'id' => $id
        ])->first();
        return view('editpemangku', ['pemangku' => $pemangku, 'menuActive' => $menuActive]);
    }
    public function proseseditpemangku($id)
    {
        $pemangku = new pemangkumodel();

        $pemangku->update($id, [
            'nama' => $this->request->getPost('nama'),
            'kontak' => $this->request->getPost('kontak'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('kontak/pemangku')->with('success', 'Data Updated Successfully');
    }
    public function delete($id)
    {
        $pemangku = new pemangkumodel();

        $pemangku->delete($id);

        return redirect()->to('kontak/pemangku')->with('success', 'Data Deleted Successfully');
    }

    public function tokohadat()
    {
        
        $tokohadat = new tokohadatmodel();
        $menuActive = "kontak";

        $alltokohadat = $tokohadat->findAll();
        return view('tokohadat', ['alltokohadat' => $alltokohadat, 'menuActive' => $menuActive]);
    }
    public function addtokoh()
    {
        $id = session()->get('id');
        $menuActive = "kontak";
        $tokohadat = new tokohadatmodel();
        $alltokohadat = $tokohadat->findAll();
        return view('addtokoh', [
            'alltokohadat' => $alltokohadat,
            'tokohadat' => $tokohadat->find($id),
            'menuActive' => $menuActive
        ]);
    }
    public function prosesaddtokoh()
    {
        $tokohadat = new tokohadatmodel();
        $tokohadat->insert([
            'nama' => $this->request->getPost('nama'),
            'kontak' => $this->request->getPost('kontak'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('kontak/tokohadat')->with('success', 'Data Added Successfully');
    }
    public function edittokohadat($id)
    {
        $tokohadat = new tokohadatmodel();
        $menuActive = "kontak";
        $tokohadat = $tokohadat->where([
            'id' => $id
        ])->first();
        return view('edittokoh', ['tokohadat' => $tokohadat, 'menuActive' => $menuActive]);
    }
    public function prosesedittokohadat($id)
    {
        $tokohadat = new tokohadatmodel();

        $tokohadat->update($id, [
            'nama' => $this->request->getPost('nama'),
            'kontak' => $this->request->getPost('kontak'),
            'alamat' => $this->request->getPost('alamat'),
        ]);

        return redirect()->to('kontak/tokohadat')->with('success', 'Data Updated Successfully');
    }
    public function deletetokoh($id)
    {
        $tokohadat = new tokohadatmodel();

        $tokohadat->delete($id);

        return redirect()->to('kontak/tokohadat')->with('success', 'Data Deleted Successfully');
    }
}
