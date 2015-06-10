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

            $date_created   =   $form_data ['date_created'];
            $employer_name 	=   $form_data ['field'] ['3.Employer Name'];
            $company_no 	=   $form_data ['field'] ['4.Company Number'];
        }?>
        <p class="dated upper">Dated</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <p class="front upper">AMBER TRUSTEES LIMITED</p>
        <p class="front">And</p>
        <p class="front upper">CAREY CORPORATE TRUSTEES UK LIMITED</p>
        <p class="front">And</p>
        <p class="front upper"><?php echo $employer_name;?></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        <div class="title-box">
            <p class="front upper">Deed of Participation</p>
            <p>in relation to</p>
            <p class="front upper">Amber Pension Trust</p>
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
        <p><strong>DEED OF PARTICIPATION</strong></p>
        <p><strong>EXECUTION DATE:</strong></p>
        <p><strong>BETWEEN:</strong></p>
        <ol>
            <li><strong>AMBER TRUSTEES LIMITED</strong> a company incorporated in England and Wales (with registered number 08756896) whose registered office is at Paradigm House, Lower Meadow Road, Handforth, Wilmslow, Cheshire, SK9 3ND and <strong>CAREY CORPORATE TRUSTEES UK LIMITED</strong> a company incorporated in England and Wales (with registered number 09359872) whose registered office is at 1st Floor, Lakeside House, Shirwell Crescent, Furzton Lake, Milton Keynes, MK4 1GA (the “<strong>Trustees</strong>”); and</li>
            <li><strong><?php echo $employer_name;?></strong> a company incorporated in England and Wales (with registered number <?php echo $employer_name;?>) whose registered office is at [Registered office address] (the “<strong>New Participating Employer</strong>”).</li>
        </ol>
	</body>
</html>
