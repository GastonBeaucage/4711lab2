<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Gallery extends Application {
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        //$this->load->view('gallery');
        $this->data['pagebody'] = 'gallery';
        $this->render();
    }
}
