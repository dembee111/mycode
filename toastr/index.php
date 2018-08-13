<?php
if ($this->input->post('submit') !== ''){

     $register = $this->input->post("register_number");
     $obog = $this->input->post("obog");
     $ner = $this->input->post("ner");
     $dugaar = $this->input->post("dugaar");
     $zturul_id = $this->input->post("zturul_id");
     $delgerengui = $this->input->post("delgerengui");
     $honog_id = $this->input->post("honog_id");
     $honog_huu = $this->input->post("honog_huu");
     $creditzeel = $this->input->post("creditzeel");
     $errorEmpty = true;

     if (empty($register) || empty($obog) || empty($ner) || empty($dugaar) ||
     empty($zturul_id) || empty($delgerengui) || empty($honog_id) || empty($honog_huu) ||
     empty($creditzeel) )
     {
          $this->session->set_flashdata('success', 'Зээл амжилттай үүслээ');
          $errorEmpty = true;
     }

  }





?>
<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");

<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");

<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");

<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>

$this->form_validation->set_rules("register_number", "register_number", 'callback_username_check');
  $this->form_validation->set_rules("obog", "Obog", 'required');
  $this->session->flashdata('error','Овог оо оруулна уу');

  $this->form_validation->set_rules("ner", "Ner", 'required');
  $this->form_validation->set_rules("dugaar", "Dugaar", 'required|alpha_numeric');
  $this->form_validation->set_rules("nemelt_utas", "Nemelt_utas", 'required|alpha_numeric');
  $this->form_validation->set_rules("zturul_id", "Zturul_id", 'required|alpha_numeric');
  $this->form_validation->set_rules("hayg", "Hayg", 'required|min_length[3]|max_length[10]');
  $this->form_validation->set_rules("delgerengui", "Delgerengui", 'required');
