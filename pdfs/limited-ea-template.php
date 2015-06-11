<?php

/**
 * Don't give direct access to the template
 */
if(!class_exists("RGForms")){
   return;
}

 global $gfpdf;

 $config_data = $gfpdf->get_default_config_data($form_id);

/**
 * Load the form data to pass to our PDF generating function
 */
$form = RGFormsModel::get_form_meta($form_id);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="stylesheet" href="<?php echo GFCommon::get_base_url(); ?>/css/print.css" type="text/css" />
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/pdfs/app.css' type='text/css' />
    <title>Limited EA Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
        <?php

        foreach($lead_ids as $lead_id) {
            $lead = RGFormsModel::get_lead($lead_id);
            do_action("gform_print_entry_header", $form, $lead);
            $form_data = GFPDFEntryDetail::lead_detail_grid_array($form, $lead);

            $date_created       =   $form_data ['date_created'];
            $employer_name 	    =   $form_data ['field'] ['3.Employer Name'];
            $company_no         =   $form_data ['field'] ['4.Company Number'];
            $address_street    	=   $form_data ['field'] ['5.Registered Office Address'] ['street'];
            $address_city       =   $form_data ['field'] ['5.Registered Office Address'] ['city'];
            $address_code       =   $form_data ['field'] ['5.Registered Office Address'] ['zip'];
            $address_country    =   $form_data ['field'] ['5.Registered Office Address'] ['country'];
            $incorporated       =   $form_data ['field'] ['7.Incorporated in'];
            $employer_cont      =   $form_data ['field'] ['10.Employer contribution rate'];
            $member_cont        =   $form_data ['field'] ['11.Member contribution rate'];
            $salary_def         =   $form_data ['field'] ['12.Salary Definition'];
        }?>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <p class="dated upper">Dated</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <div class="title-box">
            <p class="front upper">Employer Agreement For</p>
            <p class="front upper">Amber Pension Trust</p>
            <p>between</p>
            <p class="front upper"><?php echo $employer_name;?></p>
            <p class="front">And</p>
            <p class="front upper">CAREY CORPORATE TRUSTEES UK LIMITED</p>
            <p>&nbsp;</p>
        </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <p class="heading">Employer Agreement for Amber Pension Trust</p>
        <p><strong>THIS PENSION SCHEME EMPLOYER AGREEMENT</strong> is made on the</p>
        <p>           day of                 </p>
        <p>between</p>
        <ol>
            <li><?php echo $employer_name;?> a company incorporated in <?php echo $incoporated;?> (Registered Number <?php echo $company-no;?>) whose registered office is ?php echo $address_street;?>, <?php echo $address_city;?>, <?php echo $address_country;?>, <?php echo $address_code;?> (the “Employer”); and
                <br>
                <br>
            </li>
        </ol>
	</body>
</html>
