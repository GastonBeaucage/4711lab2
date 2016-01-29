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
        //get all the images from our model
        $pix = $this->images->all();
        
        //Build an array of formatted cells for them
        foreach($pix as $picture){
            $cells[] = $this->parser->parse('_cell', (array) $picture, true);
        }
        //prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open'=> '<table class="gallery">',
            'cell_start'=> '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($parms);
        
        //generate the table
        $rows = $this->table->make_columns($cells,3);
        $this->data['thetable'] = $this->table->generate($rows);
        
        $this->data['pagebody'] = 'gallery';
        
        //old code from previous versions
        //$this->load->view('gallery');
        //$this->data['pagebody'] = 'gallery';
        $this->render();
    }
}
