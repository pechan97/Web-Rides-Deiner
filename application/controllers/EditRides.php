<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EditRides extends CI_Controller
{

    public function show_rides()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->model("Dashboard_model");
        $this->load->model("Rides_model");
        $user = $_SESSION['user'];
        $id= $this->uri->segment(3);
        $data['rides']= $this->Rides_model->rides_id($id);
        $data['name'] = $this->Dashboard_model->get_name($user['id']);
        $this->load->view('EditRides/editrides',$data);
    }
    public function update_ride()
    {
        $data = $this->load->model('Rides_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ridename', 'Name Ride', 'trim|required');
        $this->form_validation->set_rules('start', 'Start Ride', 'trim|required');
        $this->form_validation->set_rules('end', 'End Ride|', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('timeone', 'Time One', 'trim|required');
        $this->form_validation->set_rules('timetwo', 'Time Two', 'trim|required');
        $savedays="";
        if(!empty($_POST['pregunta'])){
          foreach($_POST['pregunta'] as $selected){
          $savedays.=$selected."-";
          }
        } else {
          $this->session->set_flashdata('error', 'Please choose the days');
          redirect('Rides/show_rides');
        }
          if ($this->form_validation->run()) {
             $user = $_SESSION['user'];
              $data = array(
                         'name_ride' => $this->input->post('ridename'),
                         'start' => $this->input->post('start'),
                         'end' => $this->input->post('end'),
                         'description' => $this->input->post('description'),
                         'timeone' => $this->input->post('timeone'),
                         'timetwo' => $this->input->post('timetwo'),
                         'days' => $savedays
                   );
              $id= $this->uri->segment(3);
              $this->Rides_model->updateRide($id,$data);
              $this->session->set_flashdata('error', 'Ride Updated successfully');
              redirect('Rides/show_rides');
        } else {
          $this->session->set_flashdata('error', 'All Fields are required');
          redirect('Rides/show_rides');
        }
        
    }
    public function deleteride()
    {
      $data = $this->load->model('Rides_model');
      $id= $this->uri->segment(3);
      $this->Rides_model->deleteride($id);
      redirect('Dashboard/show_dashboard');
    }

}
