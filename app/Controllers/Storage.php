<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Storage extends BaseController
{   
    protected $helpers = ['form'];
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo index";

    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo show" . $id;
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //

        $data = [
            'title' => 'New Storage',
        ];
        return view('storage/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo create";
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo edit $id";

        
        $data = [
            'title' => 'Edit Storage',
            'id' => $id,
        ];
        return view('storage/edit', $data);

    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo update $id";

        print_r($this->request->getPost());
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
        echo $this->request->getMethod();
        echo "<br> metodo delete $id";
        
    }
}
