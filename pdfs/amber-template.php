r.<?php

/**
 * If the template is being loaded directy we'll call the Wordpress Core
 * Used when attempting to debug the template
 */
if(!class_exists("RGForms")){
   return;
}

/**
 * Set up the form ID and lead ID, as well as we want page breaks displayed.
 * Form ID and Lead ID can be set by passing it to the URL - ?fid=1&lid=10
 */
 PDF_Common::setup_ids();

 global $gfpdf;
 $configuration_data = $gfpdf->get_config_data($form_id);

 $show_html_fields = (isset($configuration_data['default-show-html']) && $configuration_data['default-show-html'] == 1) ? true : false;
 $show_empty_fields = (isset($configuration_data['default-show-empty']) && $configuration_data['default-show-empty']  == 1) ? true : false;
 $show_page_names = (isset($configuration_data['default-show-page-names']) && $configuration_data['default-show-page-names']  == 1) ? true : false;

/**
 * Load the form data, including the custom style sheet which looks in the plugin's theme folder before defaulting back to the plugin's file.
 */
$form = RGFormsModel::get_form_meta($form_id);
$stylesheet_location = (file_exists(PDF_TEMPLATE_LOCATION.'amber.css')) ? PDF_TEMPLATE_URL_LOCATION.'amber.css' : PDF_PLUGIN_URL .'styles/template.css' ;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel='stylesheet' href='<?php echo GFCommon::get_base_url(); ?>/css/print.css' type='text/css' />
    <link rel='stylesheet' href='<?php echo $stylesheet_location; ?>' type='text/css' />
    <title>Gravity Forms PDF Extended</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
		<img src="http://www.amberpensiontrust.co.uk/wp-content/themes/amber/library/images/amber-header.jpg" width="1000" height="329"  />
		<?php global $current_user;
			get_currentuserinfo();
		?>
       <?php

        foreach($lead_ids as $lead_id) {
            $lead = RGFormsModel::get_lead($lead_id);
            do_action("gform_print_entry_header", $form, $lead);
            $form_data = GFPDFEntryDetail::lead_detail_grid_array($form, $lead);

              $date_created       	= $form_data ['date_created'];
              $employer_name 	= $form_data ['field'] ['38.Employer Name'];
              $company_reg 		    = $form_data ['field'] [ '10.Company Registration Number' ] ;
              $address_street    	= $form_data ['field'] ['11.Registered Office Address and Postcode'] ['street'];
              $address_line    		  = $form_data ['field'] ['11.Registered Office Address and Postcode'] ['street2'];
              $address_city       	  = $form_data ['field'] ['11.Registered Office Address and Postcode'] ['city'];
              $address_zip        	  = $form_data ['field'] ['11.Registered Office Address and Postcode'] ['zip'];
              $contact_first		      	= $form_data ['field'] ['12.Employer Contact Name'] ['first'];
              $contact_last		      	= $form_data ['field'] ['12.Employer Contact Name'] ['last'];
              $contact_email		    = $form_data ['field'] ['13.Employer Contact Email'];
              $website					          = $form_data ['field'] ['14.Employer Website Address'];
              $fax							              = $form_data ['field'] ['15.Employer Fax Number'];
              $employer_phone     = $form_data ['field'] ['66.Employer Telephone Number'];
              $employer_rate		    = $form_data ['field'] ['16.Employer Contribution Rate'];
              $employee_rate		  = $form_data ['field'] ['17.Employee Contribution Rate'];
              $basic_salary 			    = $form_data ['field'] ['18.Basic Salary i.e. Basic Salary / Qualifying Earnings'];
              $basic_salary2		    = $form_data ['field'] ['57.Basis of Salary Definition'];
              $salary_defintion       = $form_data ['field'] ['67.Basis of Salary Definition'];
              $specify                   = $form_date ['field'] ['68.Please Specify'];
              $lump_sum				      = $form_data ['field'] ['19.Lump Sum Death In Service Benefit Basis'];
              $no_employees		  = $form_data ['field'] ['20.Total Number of Employees'];
              $staging					          = $form_data ['field'] ['21.Employer’s Staging Date'];
              $members				        = $form_data ['field'] ['22.Estimated Number of Members in Scheme'];
              $first_contribution	  = $form_data ['field'] ['23.Date of Expected 1st Contribution'];
              $salary_exchange    = $form_data ['field'] ['69.Salary Exchange'];
              $transfer					          = $form_data ['field'] ['25.Possible Transfer from Previous Scheme'];
              $est_transfer1			    = $form_data ['field'] ['26.Estimated Number of Transfers (if applicable)'];
              $scheme_provider	= $form_data ['field'] ['27.Transferring Scheme Provider  (if applicable)'];
              $provider_street    	= $form_data ['field'] ['28.Transferring Scheme Provider Address  (if applicable)'] ['street'];
              $provider_line    		  = $form_data ['field'] ['28.Transferring Scheme Provider Address  (if applicable)'] ['street2'];
              $provider_city       	  = $form_data ['field'] ['28.Transferring Scheme Provider Address  (if applicable)'] ['city'];
              $provider_zip        	  = $form_data ['field'] ['28.Transferring Scheme Provider Address  (if applicable)'] ['zip'];
              $establishment					        = $form_data ['field'] ['30.Establishment of Scheme'];
              $ae_system				      = $form_data ['field'] ['32.Does Employer have an Auto-Enrolment System?'];
              $carey_system		    = $form_data ['field'] ['33.Will the Employer be using the Amber Auto-Enrolment System?'];
              $adviser_system	  = $form_data ['field'] ['40.Name of alternative Auto-Enrolment System'];
              $correspondence	  = $form_data ['field'] ['36.All correspondence to be sent:'];
              $est_transfer			      = $form_data ['field'] ['39.Estimated Number of Transfers (if applicable)'];
              $ivc_name		    = $form_data ['field'] ['56.Full Name of Customer'];
              $entity						            = $form_data ['field'] ['46.Type of entity'];
              $ivc_street		    	      = $form_data ['field'] ['47.Location of business'] ['street'];
              $ivc_line  			  		      = $form_data ['field'] ['47.Location of business'] ['street2'];
              $ivc_city       				      = $form_data ['field'] ['47.Location of business'] ['city'];
              $ivc_zip        				      = $form_data ['field'] ['47.Location of business'] ['zip'];
              $office 						            = $form_data ['field'] ['48.Registered office in country of incorporation'];
              $reg_num					        = $form_data ['field'] ['49.Registered number, if any (or appropriate)'];
              $reg_comp				        = $form_data ['field'] ['50.Relevant company registry or regulated market listing authority'];
              $directors 				        = $form_data ['field'] ['51.Names* of directors (or equivalent)'];
              $principals 				      = $form_data ['field'] ['Names* of principal beneficial owners (over 25%)'];
              $structure					        = $form_data ['field'] ['55.Additional Contribution Structures'];
              $adviser_name_first       = $form_data ['field'] ['61.Adviser Name']['first'];
              $adviser_name_last       = $form_data ['field'] ['61.Adviser Name']['last'];
              $adviser_email       = $form_data ['field'] ['62.Adviser Email'];
		}
        ?>
        <h1>New Scheme - ID #<?php echo $lead_id; ?></h1>
		<table width="100%">
			<thead>
				<tr>
					<th class="h2" colspan="2">Adviser Details</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50%">Company Name</td>
					<td width="50%">
						<?php
							  $user_id = $form_data['misc']['created_by'];;
							  $key = 'Company Name';
							  $single = true;
							  $user_last = get_user_meta( $user_id, $key, $single );
							  echo $user_last ;
						?>
					</td>
				</tr>
				<tr class="even">
					<td>Name of Contact Person/Adviser:</td>
					<td>
					<?php echo $adviser_name_first; ?> <?php echo $adviser_name_last; ?>
					</td>
				</tr>
				<tr>
					<td>Company Registration Number:</td>
					<td>
						<?php
							  $user_id = $form_data['misc']['created_by'];;
							  $key = 'Company Registration Number';
							  $single = true;
							  $user_last = get_user_meta( $user_id, $key, $single );
							  echo $user_last ;
						?>

					</td>
				</tr>
				<tr class="even">
					<td>Registered Office Address &amp; Postcode:</td>
					<td>
						<?php
							  $user_id = $form_data['misc']['created_by'];;
							  $key = 'Office';
							  $single = true;
							  $user_last = get_user_meta( $user_id, $key, $single );
							  echo $user_last ;
						?>
					</td>
				</tr>
				<tr>
					<td>Telephone:</td>
					<td>
						<?php
							  $user_id = $form_data['misc']['created_by'];;
							  $key = 'Telephone';
							  $single = true;
							  $user_last = get_user_meta( $user_id, $key, $single );
							  echo $user_last ;
						?>
					</td>
				</tr>
				<tr class="even">
					<td>Email:</td>
					<td>
						<?php echo $adviser_email; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table width="100%">
			<thead>
				<tr>
					<th class="h2" colspan="2">Employer Details</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50%">Employer Name</td>
					<td width="50%"><?php echo $employer_name; ?></td>
				</tr>
				<tr class="even">
					<td>Company Registration Number</td>
					<td><?php echo $company_reg; ?></td>
				</tr>
				<tr>
					<td>Registered Office Address and Postcode</td>
					<td>
						<?php echo $address_street;?>,<br>
						<?php echo $address_line; ?>, <br>
						<?php echo $address_city;?>,<br>
						<?php echo $address_zip;?><br>
					</td>
				</tr>
				<tr class="even">
					<td>Employer  Contact Name</td>
					<td><?php echo $contact_first; ?> <?php echo $contact_last; ?></td>
				</tr>
				<tr>
					<td>Employer Contact Email Address</td>
					<td><?php echo $contact_email; ?></td>
				</tr>
				<tr class="even">
					<td>Generic Employer website address for registration with The Pensions Regulator</td>
					<td><?php echo $website; ?></td>
				</tr>
				<tr>
					<td>Employer Fax Number</td>
					<td><?php echo $fax; ?></td>
				</tr>
        <tr class="even">
					<td>Employer Telephone Number</td>
					<td><?php echo $employer_phone; ?></td>
				</tr>
				<tr >
					<td>Employer Contribution Rate</td>
					<td><?php echo $employer_rate;?></td>
				</tr>
				<tr class="even">
					<td>Employee Contribution Rate</td>
					<td><?php echo $employee_rate;?></td>
				</tr>
				<tr>
					<td>Contribution Structure</td>
					<td><?php echo $structure;?></td>
				</tr>
				<tr class="even">
					<td>Basis of Salary</td>
					<td><?php echo $salary_defintion;?> <?php echo $specify;?></td>
				</tr>
				<tr >
					<td>Total Number of Employees</td>
					<td><?php echo $no_employees;?></td>
				</tr>
				<tr class="even">
					<td>Employer's Staging Date</td>
					<td><?php echo $staging;?></td>
				</tr>
				<tr>
					<td>Estimated Number of Members in Scheme</td>
					<td><?php echo $members;?></td>
				</tr>
				<tr  class="even">
					<td>Date of Expected 1<sup>1st</sup> Contribution</td>
					<td><?php echo $first_contribution;?></td>
				</tr>
        <tr >
					<td>Salary Exchange</td>
					<td><?php echo $salary_exchange;?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table width="100%">
			<thead>
				<tr>
					<th  class="h2" colspan="2">Transfer In</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50%">Possible Transfer from Previous Scheme</td>
					<td width="50%"><?php echo $transfer; ?></td>
				</tr>
				<tr class="even">
					<td>Estimated Number of Transfers</td>
					<td><?php echo $est_transfer; ?> <?php echo $est_transfer1; ?></td>
				</tr>
				<tr>
					<td width="50%">Transferring Scheme Provider (if applicable)</td>
					<td width="50%"><?php echo $scheme_provider; ?></td>
				</tr>
				<tr class="even">
					<td>Transferring Scheme Provider Address (if applicable)</td>
					<td>
						<?php echo $provider_street; ?><br>
						<?php echo $provider_line; ?><br>
						<?php echo $provider_city; ?><br>
						<?php echo $provider_zip; ?>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table width="100%">
			<thead>
				<tr >
					<th class="h2" colspan="2">Charging Structure</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50%">Establishment of Scheme (Scheme Administrator)</td>
					<td width="50%">0.75% ongoing charge, paid by the employee</td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table width="100%">
			<thead>
				<tr>
					<th class="h2" colspan="2">Auto Enrolment</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td>Will the Employer be using Amber Auto-Enrolment System?</td>
					<td><?php echo $carey_system; ?></td>
				</tr>
				<tr class="even">
					<td width="50%">Name of alternative Auto-Enrolment System</td>
					<td width="50%"><?php echo $adviser_system; ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<br>
		<table width="100%">
			<thead>
				<tr>
					<th class="h2" colspan="2">Correspondence</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50%">All correspondence to be sent:</td>
					<td width="50%"><?php echo $correspondence; ?></td>
				</tr>
			</tbody>
		</table>
<pagebreak>
		<h1>Declaration</h1>
		<p>The company has appointed the adviser noted below to advise the company with regard to their company work place pension arrangement and the associated investment strategy using the Blackrock Life Path default funds, and authorise Carey Pensions UK to liaise with them on any aspect of the scheme, on our behalf.</p>

    <h2>Employer CTC Authorisation</h2>
    <p>In accordance with the signed Employer Agreement, we authorise Carey Corporate Pensions UK Limited (CCPUK) to provide
our scheme advisor, stated below, with access to our pension scheme member records held on CCPUK’s pension administration system CTC Elements (the database).</p>
    <p>We confirm that:</p>
<ul>
<li>Sccess to the database is granted for the purpose of annual scheme reviews and retirement planning.</li>
    <li>A suitable Data Protection agreement is in place with our scheme advisor, in accordance with the Data Protection
Act 1998.</li>
    <li>We will communicate to members that access to personal information has been provided to the scheme advisor, and
the purpose for which this will be used</li>
    </ul>
    <h2>Adviser CTC Declaration</h2>
    <p>We confirm that:</p>
<ul>
    <li>A suitable Data Protection agreement is in place with the employer stated above, in accordance with the Data
Protection Act 1998.</li>
    <li>Access to scheme member’s personal information is to be used only in the context of annual scheme reviews and
future retirement planning.</li>
    <li>Any member who declines contact from the advisor will be recorded as such by the advisor and will not be
approached until such time as individual agreement has been given.</li>
    </ul>
		<table width="100%">
			<tr>
				<th class="h2" colspan="2">Signature</th>
			</tr>
			<tbody>
			<tr>
				<td width="50%">Company Name: <?php echo $employer_name;?></td>
				<td width="50%"></td>
			</tr>
			<tr class="even">
				<td>Name of Signatory:</td>
				<td>Position in Company:</td>
			</tr>
			<tr>
				<td  style="height:50px;" valign="top" >Employer Signature:</td>
				<td  style="height:50px;" valign="top" >Date:</td>
      </tr>
			<tr class="even">
				<td>Name of Adviser Firm: <?php
							  $user_id = $form_data['misc']['created_by'];;
							  $key = 'Company Name';
							  $single = true;
							  $user_last = get_user_meta( $user_id, $key, $single );
							  echo $user_last ;
						?>
				</td>
				<td></td>
			</tr>
			<tr>
				<td>Name of Adviser: <?php echo $adviser_name_first; ?> <?php echo $adviser_name_last; ?></td>
				<td></td>
			</tr>
			<tr class="even">
				<td style="height:50px;" valign="top" >Adviser Signature:</td>
				<td style="height:50px;" valign="top" >Date:</td>
			</tr>
			</tbody>
			</table>
<pagebreak>
			<h1>Confirmation of Verification of Identity - Corporate</h1>
			<table width="100%">
				<tr>
					<th class="h2" colspan="2">Details of Customer</th>
				</tr>
				<tbody>
					<tr>
						<td width="50%">Full name of customer</td>
						<td width="50%"><?php echo $ivc_name;?></td>
					</tr>
					<tr class="even">
						<td>Location of Business (full operating address)</td>
						<td>
							<?php echo $ivc_street;?><br>
							<?php echo $ivc_line;?><br>
							<?php echo $ivc_city;?><br>
							<?php echo $ivc_zip;?>
						</td>
					</tr>
					<tr>
						<td>Registered office in country of incorporation</td>
						<td><?php echo $office;?></td>
					</tr>
					<tr class="even">
						<td>Registered number, if any (or appropriate)</td>
						<td><?php echo $reg_num;?></td>
					</tr>
					<tr>
						<td>Relevant company registry or regulated market listing authority</td>
						<td><?php echo $reg_comp;?></td>
					</tr>
					<tr class="even">
						<td>Names* of directors (or equivalent)</td>
						<td><?php echo $directors;?></td>
					</tr>
					<tr>
						<td>Names* of principal beneficial owners (over 25%)</td>
						<td><?php echo $principals;?></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<table width="100%">
				<tr>
					<th class="h2">Confirmation</th>
				</tr>
			</table>
			<p>I/we confirm that:</p>
			<ol type="a">
				<li>the information in section 1 above was obtained by me/us in relation to the customer;</li>
				<li>the evidence I/we have obtained to verify the identity of the customer: [tick only one]</li>
			</ol>
			<table style="border: 1px solid  #faa61a;">
				<tr style="border: 1px solid  #faa61a;">
					<td width="90%" style="border: 1px solid  #faa61a;">Meets the guidance for standard evidence set out within the guidance for the UK Financial Sector issued by JMLSG; or</td>
					<td width="10%" style="border: 1px solid  #faa61a;"></td>
				</tr>
				<tr style="border: 1px solid  #faa61a;">
					<td width="90%" style="border: 1px solid  #faa61a;">Exceeds the standard evidence (written details of the further verification evidence taken are attached to this confirmation).	</td>
					<td width="10%" style="border: 1px solid  #faa61a;"></td>
				</tr>
			</table>
			<br>
			<br>
			<table width="100%">
				<tr>
					<td width="25%"  style="height:50px;" valign="top" >
						<b>Signed:</b>
					</td>
					<td width="75%"  style="height:50px;" valign="top" >
					</td>
				</tr>
				<tr>
					<td width="25%">
						<b>Name:</b>
					</td>
					<td width="75%">
					</td>
				</tr>
				<tr>
					<td width="25%">
						<b>Position:</b>
					</td>
					<td width="75%">
					</td>
				</tr>
				<tr>
					<td width="25%">
						<b>Date:</b>
					</td>
					<td width="75%">
					</td>
				</tr>
			</table>
			<br>
			<br>
			<table width="100%">
				<tr>
					<th class="h2" colspan="2">Details of Introducing Firm</th>
				</tr>
				<tr>
					<td width="50%">Full name of Regulated Firm or (Sole Trader)</td>
					<td width="50%"></td>
				</tr>
				<tr class="even">
					<td width="50%">FCA Reference Number</td>
					<td width="50%"></td>
				</tr>
			</table>
			<p>Please return all completed forms and supporting documentation to the address below:-</p>
			<p>
				Amber Financial Investments Ltd<br>
				Bollin House<br>
				Oakfield Road<br>
				Cheadle Royal Business Park<br>
				SK8 3GX
			</p>
		</body>
</html>
