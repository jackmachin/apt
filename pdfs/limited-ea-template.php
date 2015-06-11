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

    <style>
        @page {
            header: html_myHTMLHeader1;
        }

        @page:first {
            header: none;
        }
    </style>
</head>
	<body>
        <htmlpageheader name="myHTMLHeader1">
            <p class="heading">Employer Agreement for Amber Pension Trust</p>
        </htmlpageheader>
                <htmlpageheader name="myHTMLHeader2">
            <p class="heading">Fuck all</p>
        </htmlpageheader>
        <?php

        foreach($lead_ids as $lead_id) {
            $lead = RGFormsModel::get_lead($lead_id);
            do_action("gform_print_entry_header", $form, $lead);
            $form_data = GFPDFEntryDetail::lead_detail_grid_array($form, $lead);

            $date_created       =   $form_data ['date_created'];
            $adviser_first      =   $form_data ['field'] ['1.Adviser Name'] ['first'];
            $adviser_last       =   $form_data ['field'] ['1.Adviser Name'] ['last'];
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
        <p><strong>1. DEFINITIONS AND INTERPRETATION</strong></p>
        <p class="list">1.1 In this Agreement, unless the context otherwise requires, the following words and expressions have the meanings given in this paragraph:</p>
            <table class="list">
                <tr>
                    <td width="35%" valign="top"><strong>Administration Agreement</strong></td>
                    <td width="65%" valign="top">The administration agreement entered into between the Trustees and the Administrator which is more particularly described in Schedule 3 to this Agreement and as amended by agreement between the parties thereto from time to time.</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Adviser</strong></td>
                    <td width="65%" valign="top"><?php echo $adviser_first;?> <?php echo $adviser_last;?></td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Assessment Date</strong></td>
                    <td width="65%" valign="top">As appropriate either (a) the Employer’s Staging Date for existing workers, (b) the first day of employment for any new joiner after the Staging Date, (c) the birthday of a worker turning 22 years old or (d) the first day of the pay reference period for any worker assessed after the Employer’s Staging Date or the last day of the postponement period.</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Business Day</strong></td>
                    <td width="65%" valign="top">Means any day on which clearing banks are open for business in the UK.</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Business Hours</strong></td>
                    <td width="65%" valign="top">9am to 5pm, UK time on a Business Day</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Contribution Date</strong></td>
                    <td width="65%" valign="top">Any date notified by the Trustees or Employer to the Administrator in accordance with the Services and Time Limits on which payments are to be credited to the Scheme.</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Contribution(s)</strong></td>
                    <td width="65%" valign="top">Contributions made by the Members and Employer, under the Scheme.</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Database</strong></td>
                    <td width="65%" valign="top">The electronic and other records maintained in relation to Members for the purpose of providing the Services</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Deed of Participation</strong></td>
                    <td width="65%" valign="top">The deed of participation among the Trustees and the Employer dated on or around the date of this Agreement</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Delivery Method</strong></td>
                     <td width="65%" valign="top">Means the method by which the Database is accessed by the Employer and employees</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Designated Persons</strong></td>
                    <td width="65%" valign="top">The persons authorised by the Employer and specified to the Administrator on whose instructions the Administrator can act and with whom the Administrator may communicate  from time to time in accordance with this Agreement</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Dispute</strong></td>
                    <td width="65%" valign="top">means any issue identified in a Dispute Notice as being a dispute</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Dispute Notice</strong></td>
                    <td width="65%" valign="top">Means a notice from one party to the other:
                        <ol class="alpha">
                            <li>Stating that, so far as the party giving the notice is concerned, a dispute exists in relation to this Agreement and that there is no reasonable prospect of it being determined other than under the provisions contained in clause 9;</li>
                            <li>Indicating the nature of that dispute; and</li>
                            <li>Requiring it to be determined in accordance with clause 9.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Eligible jobholder</strong></td>
                    <td width="65%" valign="top">A worker who is auto-enrolled into the Employer’s qualifying pension scheme, aged between 22 and state pension age and has the qualifying pensionable earnings</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Entitled worker</strong></td>
                    <td width="65%" valign="top">A worker who is entitled to join the Scheme but will not be auto-enrolled due to not having the relevant qualifying earnings</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Intellectual Property Rights</strong></td>
                    <td width="65%" valign="top">means all right, title and interests in copyrights, databases, get-up, inventions, know-how, logos, patents, registered and unregistered designs, services marks, trade marks and trade names, and all similar proprietary rights which may subsist now or in the future, including (where such rights are obtained or enhanced by registration) any registration of such rights and rights to apply for registration</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Member</strong></td>
                    <td width="65%" valign="top">an individual who has been admitted as and remains at the relevant time a member of the Scheme and who has been accepted by the Employer and Administrator onto the Database in accordance with this Agreement</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Methods of Communication</strong></td>
                    <td width="65%" valign="top">The methods of communication between the Employer and the Administrator in relation to the Services as specified in Schedule 2 to this Agreement</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Non-eligible jobholder</strong></td>
                    <td width="65%" valign="top">Worker who is not eligible to be auto-enrolled into the Employer’s qualifying pension scheme</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Opting out</strong></td>
                    <td width="65%" valign="top">The process in which an eligible jobholder ceases to be a member of the Employer’s qualifying pension scheme</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Owner</strong></td>
                    <td width="65%" valign="top">The owner of the Supporting Software from whom the Administrator holds a licence to use the same</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Pay Reference Period</strong></td>
                    <td width="65%" valign="top">Period of time by reference to which the Employer pays the worker their regular wage or salary</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Personal Information</strong></td>
                    <td width="65%" valign="top">Personal data as defined in the Data Protection Act 1998, held by the Administrator, Adviser or the Trustees, as the context requires, in relation to a Member in connection with the Scheme</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Postponement</strong></td>
                    <td width="65%" valign="top">Suspends the duty of assessment and automatic enrolment from one day to a maximum of three months</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Prescribed Data</strong></td>
                    <td width="65%" valign="top">Personal information relating to Members to be included as part of the Scheme Records</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Prescribed Format</strong></td>
                    <td width="65%" valign="top">The format and content requirements for adding Prescribed Data to the Database as specified from time to time by the Administrator</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Qualifying Earnings</strong></td>
                    <td width="65%" valign="top">All of the following items: salary, wages, commission, bonuses, overtime, statutory sick pay, statutory maternity pay, and ordinary or additional statutory paternity pay and statutory adoption pay</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Re-enrolment date</strong></td>
                    <td width="65%" valign="top">Every third anniversary of the Assessment Date</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Scheme</strong></td>
                    <td width="65%" valign="top">Amber Pension Trust</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Scheme Bank Account</strong></td>
                    <td width="65%" valign="top">The bank account opened by the Administrator on behalf of the Trustees for the purposes of the Scheme</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Scheme Records</strong></td>
                    <td width="65%" valign="top">Records relating to Contributions, Members, unit holdings and valuations of the Investments in relation to the Scheme</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Services</strong></td>
                    <td width="65%" valign="top">The services to be provided in accordance with and as detailed in the Administration Agreement </td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Services and Time Limits</strong></td>
                    <td width="65%" valign="top">The standard terms and conditions (including time limits) relating to the Services</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Staging Date</strong></td>
                    <td width="65%" valign="top">The date by which an Employer must auto-enrol its workers into a qualifying pension scheme in accordance with their PAYE numbers determined as at 1st April 2012</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Supporting Software</strong></td>
                    <td width="65%" valign="top">Any software owned or licensed to the Administrator and made available to the Trustees or Employer by the Administrator to support the provision of the Services</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Trustees</strong></td>
                    <td width="65%" valign="top">Means the trustees of the Scheme, Carey Corporate Trustees UK Limited (Registered Number 09359872) who registered office is at 1st Floor, Lakeside House, Shirwell Crescent, Furzton Lake, Milton Keynes, MK4 1GA and Amber Trustees Limited (Registered Number 8756896) whose registered office is at Paradigm House, Lower Meadow Road, Handforth, Wilmslow, Cheshire SK9 3ND</td>
                </tr>
                <tr>
                    <td width="35%" valign="top"><strong>Website</strong></td>
                    <td width="65%" valign="top">The website designed established and maintained by or on behalf of the Administrator available on <a href="http://www.careypensions.co.uk/">www.careypensions.co.uk</a>;
                    </td>
                </tr>
        </table>
	</body>
</html>
