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
        <table width="100%">
            <tbody>
                <tr>
                    <td width="30%">&nbsp;</td>
                    <td width="30%">day of</td>
                    <td width="30%">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <p>between</p>
        <ol>
            <li><strong><?php echo $employer_name;?></strong> a company incorporated in <?php echo $incoporated;?> (Registered Number <?php echo $company-no;?>) whose registered office is ?php echo $address_street;?>, <?php echo $address_city;?>, <?php echo $address_country;?>, <?php echo $address_code;?> <strong>(the “Employer”);</strong> and
                <br>
                <br>
            </li>
            <li><strong>CAREY CORPORATE PENSIONS UK LIMITED</strong> a company incorporated in England and Wales (Registered Number 09358998) whose registered office is at 1st Floor, Lakeside House, Shirwell Crescent, Furzton Lake, Milton Keynes, MK4 1GA <strong>(the “Administrator”)</strong>
                <br>
                <br>
            </li>
        </ol>
        <p><strong>Introduction</strong></p>
        <ol class="alpha">
            <li>The Employer is required to provide a qualifying workplace pension scheme in order to comply with the requirements of UK law concerning automatic enrolment of employees into a pension scheme, and for that purpose has agreed to participate in the Scheme.
                <br>
                <br>
            </li>
            <li>This agreement sets out the rights and responsibilities of the Employer and the Administrator respectively in relation to the participation of the Employer in and the operation of the Scheme.
                <br>
                <br>
            </li>
        </ol>
        <p><strong>IT IS HEREBY AGREED</strong> as follows:-</p>
        <ol>
            <li><strong>DEFINITIONS AND INTERPRETATION</strong>
                <br>
                <br>
                <ol>
                    <li>In this Agreement, unless the context otherwise requires, the following words and expressions have the meanings given in this paragraph:
                        <p>&nbsp;</p>
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td width="50%" valign="top">
                                        <strong>Administration Agreement</strong>
                                    </td>
                                    <td width="50%" valign="top">
                                        The administration agreement entered into between the Trustees and the Administrator which is more particularly described in Schedule 3 to this Agreement and as amended by agreement between the parties thereto from time to time
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%" valign="top">
                                        <strong>Administration Agreement</strong>
                                    </td>
                                    <td width="50%" valign="top">
<?php echo $adviser_name;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ol>
            </li>
        </ol>
	</body>
</html>
