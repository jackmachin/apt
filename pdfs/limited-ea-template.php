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
            <li><strong><?php echo $employer_name;?></strong> a company incorporated in <?php echo $incoporated;?> (Registered Number <?php echo $company-no;?>) whose registered office is <?php echo $address_street;?>, <?php echo $address_city;?>, <?php echo $address_country;?>, <?php echo $address_code;?> <strong>(the “Employer”);</strong> and
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
        <p class="list">1.2	Words importing the singular number only shall include the plural number and vice versa.</p>
        <p class="list">1.3	Words importing the masculine gender only shall include the feminine gender.</p>
        <p class="list">1.4	The word "may" shall be construed as permissive and the word "shall" shall be construed as imperative.</p>
        <p class="list">1.5	All schedules to this agreement shall be deemed to form part of and be included in the agreement.</p>
        <p class="list">1.6	Unless otherwise defined, or the context requires otherwise, words and expressions defined in the legislation concerning automatic enrolment of employees into pension schemes have the same meanings in this Agreement. </p>
        <p class="list">1.7	The headings of the terms and conditions herein contained are inserted for convenience of reference only and are not intended to be part of or to affect the meaning or interpretation of any of the terms and conditions of this Agreement.</p>
    <p><strong>2. PARTICIPATION</strong></p>
    <p>The Employer will participate in the Scheme with effect on and from the date of the Deed of Participation.</p>
    <p><strong>3. BANK AND OTHER ACCOUNTS</strong></p>
    <p>The Employer shall pay to the Scheme Bank Account all Contributions payable by or on behalf of Members.</p>
    <p><strong>4. SOFTWARE AND WEB SITES</strong></p>
        <p class="list">4.1	The Employer hereby agrees that during the term of this Agreement it shall:</p>
            <p class="double-list">4.1.1 Carry out its own virus checks and firewall protection in respect of its email and internet access facilities;</p>
            <p class="double-list">4.1.2 Not copy the Supporting Software, including the Database comprised in the Supporting Software or otherwise reproduce the same;</p>
            <p class="double-list">4.1.3 Not translate, adapt, vary or modify the Supporting Software, including the Database comprised in the Supporting Software;</p>
            <p class="double-list">4.1.4 Not disassemble, decompile or reverse engineer the Supporting Software including the Database comprised in the Supporting Software;</p>
            <p class="double-list">4.1.5 Endeavour to ensure that all Prescribed Data is entered into the Database in the Prescribed Format.  The Employer agrees that it shall be liable for any loss or damage suffered by the Administrator arising directly or indirectly from any malfunction of the Supporting Software, including the Database comprised in the Supporting Software, which caused by negligence, fraud or wilful misconduct of the Employer. This also applies to the use of the Supporting Software and/or inputting data into the database by the Employer;</p>
            <p class="double-list">4.1.6 Supervise and control the access to and use of the Supporting Software and the Database in accordance with the terms of this Agreement;</p>
            <p class="double-list">4.1.7 Not provide or otherwise allow access to the Database in whole or in part, in any form to any person other than the Designated Persons without the prior written consent of the Administrator and shall notify the Administrator immediately, in writing, if any Designated Person ceases to be employed by the Employer;</p>
            <p class="double-list">4.1.8 Maintain accurate and up to date records of the users of the Database and shall send a list of such users to the Administrator at the date of this Agreement and thereafter as changes are made to the users; and</p>
            <p class="double-list">4.1.9 Advise the Administrator as soon as possible if it becomes aware of any failure, delay, malfunction, virus, programming error or error in sending or receiving any data or instructions or any suspected fraud or breach of security and assist the Administrator in any remedial steps it proposes.</p>
        <p class="list">4.2	The Administrator will use reasonable endeavours to ensure the security of and prevent unauthorised access to the Database.</p>
        <p class="list">4.3	The <strong>Administrator</strong> shall provide each Member with a PIN and will provide instructions in writing to each Member in relation to the review of their Personal Information on the Website.</p>
        <p class="list">4.4	The Employer acknowledge s that any and all Intellectual Property Rights subsisting in or used in connection with the Supporting Software, including the Database comprised in the Supporting Software and all documentation and manuals relating thereto are and shall remain the sole property of the Owner and/or the Administrator and that any Intellectual Property Rights substituting in or used in connection with the Database shall remain the sole property of the Administrator.  The Employer shall not during or at any time after the expiry or termination of this Agreement in any way question or dispute the ownership by the Owner or the Administrator thereof.</p>
        <p class="list">4.5	In the event that new inventions, designs or processes or other Intellectual Property Rights evolve in the performance of or as a result of the Agreement, the Employer acknowledge that the same shall be the property of the Owner and/or the Administrator unless otherwise agreed in writing by the Owner and/or the Administrator (as applicable).</p>
    <p><strong>5. RESPONSIBILITIES OF THE EMPLOYER AND COMMUNICATIONS</strong></p>
        <p>The Employer shall have the responsibilities in relation to the Services as set out in Schedule 1.</p>
        <p>The Employer and the Administrator shall communicate with each other in relation to the Services as specified in the Methods of Communication.</p>
    <p><strong>6. LIABILITY</strong></p>
        <p class="list">6.1	The Administrator shall be entitled to rely on any and all information, instructions and data it receives from Employer and the Administrator shall not be required to verify the accuracy of the same. The Administrator shall not be liable to the Employer for any loss or damage whatsoever and howsoever caused by its reliance on, use of or application of the same for the purposes of the Scheme.</p>
        <p class="list">6.2	Provided that the Administrator has complied with the provisions of clause 4.2, the Administrator shall not be liable to the Employer for any loss which arises to the Employer otherwise than as a result of any act and/or omission of the Administrator. The Administrator agrees to inform the Employer of any breach of security affecting the Website and/or Database as soon as reasonably practicable following notification of such breach.</p>
        <p class="list">6.3	The Administrator shall be liable to the Employer for any action, expense, liability, loss, penalty or proceeding arising out of any breach of the Administrator’s obligations under this Agreement, the failure of the Administrator to administer the Scheme in accordance with its obligations under the Administration Agreement, applicable legislative and regulatory requirements and good pension scheme administration practice, or any fraud, negligence or wilful wrongdoing by the Administrator or its officers.</p>
        <p class="list">6.4	If any work carried out by the Administrator in accordance with the Employer’s specifications infringes any third party patent or other proprietary rights, the Employer shall indemnify the Administrator against all liabilities, costs and expenses which may thereby be suffered by the Administrator.</p>
    <p><strong>7. CONFIDENTIAL INFORMATION</strong></p>
        <p class="list">7.1	Subject to clause 7.3, the Employer agrees to permit the Administrator access to confidential information required by the Administrator for compliance with the provisions of this Agreement, and the proper administration of the Scheme, or where disclosure is required for the proper provision of the Services, in connection with legal proceedings, by any competent authority, or by law (including, without limitation, under section 70 of the Pensions Act 2004).</p>
        <p class="list">7.2	The Administrator shall provide to the Employer and to their internal and external auditors, such information about the Scheme as specified, providing it is in the possession of or under the control of the Administrator.</p>
        <p class="list">7.3	Subject to 7.2 and unless the information in question is already in the public domain or if disclosure is required:</p>
            <p class="double-list">7.3.1 For proper provision of the Services;</p>
            <p class="double-list">7.3.2 In connection with legal proceedings or by a regulatory body; or</p>
            <p class="double-list">7.3.3 By law,</p>
        <p class="list">the Administrator shall keep confidential all Personal Information and any confidential information acquired by it through the provision of the Services and shall only use confidential information for the specific purpose for which it is being engaged.</p>
        <p class="list">7.4	Within a reasonable time following termination of this Agreement, the Administrator agrees to return to the Employer any confidential information it may hold on behalf of the Employer.</p>
        <p class="list">7.5	This clause shall survive the termination of this Agreement.</p>
        <p><strong>8. SCHEME RECORDS</strong></p>
            <p clas="list">8.1	On reasonable prior notice, the Administrator shall permit the Employer and anyone authorised by them in writing to inspect and take copies of the Scheme Records during normal Business Hours.</p>
        <p class="list">8.2	The Administrator shall endeavour to give the Employer at least one month’s notice, in advance, of any proposed major change to any system on which the Scheme Records are kept.</p>
        <p class="list">8.3	The Administrator shall maintain or cause to be maintained a proper system for recovery in case of disaster of such of the Scheme Records as the Administrator, or anyone on whom the Administrator relies for storing the Scheme Records, keeps in computerised or other electronic form.  On being given reasonable notice, the Administrator shall provide the Employer with details of such system.</p>
        <p class="list">8.4 If the consent of a third party is required in order for the Employer to access and use any part of the Scheme Records held in computerised or other electronic form, the Administrator shall endeavour to procure such consent(s).  The Employer agrees that it shall be responsible for all reasonable costs and expenses incurred by the Administrator in obtaining such consent(s).</p>
        <p class="list">8.5	The Scheme Records will be retained for the legal minimum term as required.</p>
    <p><strong>9. DISPUTES</strong></p>
        <p class="list">9.1	If a disagreement arises between the parties on any matter arising under this Agreement, they shall each appoint representatives to meet as soon as practicable to seek to resolve the issue.  If the representatives are unable to reach agreement, and save where legal proceedings have been commenced, any party to the disagreement may then serve a Dispute Notice.  For the purposes of this Agreement, a Dispute exists when a Dispute Notice is served.</p>
        <p class="list">9.2	If the Employer is not satisfied with the response from the Scheme Administrator, the Employer may take their complaint to the Trustees of the Scheme.</p>
        <p>9.3 If the Employer is still not satisfied they may contact The Pensions Advisory Service (TPAS). In most cases, TPAS will assist in reaching a satisfactory outcome. If the Employer is still not satisfied, the Pensions Ombudsman may investigate and resolve the complaint or dispute. The Pensions Ombudsman will expect the Employer to have referred their complaint to TPAS in the first instance. Contact details for both parties are as follows:</p>
        <table width="80%" class="cheeky">
            <tbody>
                <tr>
                    <td width="50%">
                        The Pensions Advisory Service<br>
                        11 Belgrave Road<br>
                        London<br>
                        SW1V 1RB<br>
                        TEL: 0845 601 2923
                    </td>
                    <td width="50%">
                        The Pensions Ombudsman<br>
                        11 Belgrave Road<br>
                        London<br>
                        SW1V 1RB<br>
                        TEL: 020 7630 2200
                    </td>
                </tr>
            </tbody>
        </table>
    <p><strong>10. TERMINATION</strong></p>
       <p class="list">10.1 If the Employer goes into liquidation, or an order is made or a resolution is passed to put the Employer into liquidation (except a voluntary liquidation for the purpose of reconstruction or amalgamation under terms previously approved in writing by the other party), or such party is unable to pay its debts or if a receiver has been appointed over any of its assets. Any agreement the Employer was party to will be deemed to be terminated.</p>
        <p class="list">10.2 If the Employer wishes to terminate this agreement, they must give a minimum of six months notice to the administrator.</p>
    <p><strong>11. FORCE MAJEURE</strong></p>
        <p class="list">11.1 Not withstanding anything herein contained, the Administrator shall not be responsible for any loss or damage suffered by the Employer or for any failure to perform its duties hereunder if such loss or failure shall be caused by or directly or indirectly due to an act of God, outbreak of hostilities (whether war is declared or not), insurrection, riot, civil disturbance, act of terrorism, regulation of a government or public authority or anything else beyond the control of the Administrator.</p>
        <p class="list">11.2 If the administrator is prevented by Force Majeure for complying with its material obligations under this Agreement for a continuous period of thirty days then either party shall be entitled to service notice to terminate this Agreement with immediate effect.</p>
    <p><strong>12. ASSIGNMENT</strong></p>
        <p>This Agreement is personal to the Employer and neither the Agreement nor any right or duty under it is capable of assignment save with the consent of the other parties.</p>
    <p><strong>13. DATA PROTECTION</strong></p>
        <p class="list">13.1 The Employer will ensure that they comply at all times with the provisions of The Data Protection Act 1998, where applicable, and all other applicable laws, regulations and codes of practice relating to data protection in force from time to time.</p>
        <p class="list">13.2 The Administrator agrees to only process personal information associated with the Scheme for the purpose of administering the Scheme.  The Administrator agrees not to transfer or disclose any such personal information to a third party without prior written approval from the Employer.</p>
    <p><strong>14. INSURANCE</strong></p>
        <p>The Employer and the Administrator confirms that they have in effect and will maintain adequate insurance required in order to perform their obligations under this Agreement.</p>
    <p><strong>15. VARIATION OF AGREEMENT</strong></p>
        <p>Any variation of this Agreement shall be in writing and signed by the Employer or by someone authorised in writing by the Employer to do so.</p>
    <p><strong>16. NOTICES</strong></p>
        <p class="list">16.1 Except as otherwise specified herein, every notice to be given hereunder shall be in writing and shall be expressed to be a notice given hereunder and shall be deemed duly given:</p>
            <p class="double-list">16.1.1 If delivered by hand at the address set out below of the intended recipient (or at such other address as the intended recipient shall have previously communicated by notice to the party giving the said notice), at the time of delivery to the intended recipient if such day is a Business Day, or if such day is not a Business Day, on the next following Business Day; or</p>
        <p class="double-list">16.1.2 If posted to the Recipient's Address, when actually received by the intended recipient or, if posted by prepaid registered post to the Recipient’s Address, three Business Days after posting; or</p>
        <p class="double-list">16.1.3 If sent by facsimile to the correct facsimile number of the intended recipient set out below (or such other facsimile number as shall have been previously communicated by notice to the party giving such notice), at the time of completion of transmission if transmitted on a Business Day or if transmitted on a day which is not a Business Day, on the next following Business Day.</p>
        <table width="80%" class="cheeky">
            <tr>
                <td  valign="top" width="40%">
                    <strong>The Administrator</strong>
                </td>
                <td valign="top" width="60%">Carey Corporate Pensions UK Limited	</td>
            </tr>
            <tr>
                <td valign="top">
                    Address:
                </td>
                <td valign="top">
                    1st Floor, Lakeside House, Shirwell Crescent, Furzton Lake, Milton Keynes, MK4 1GA
                </td>
            </tr>
            <tr>
                <td valign="top">Attention:</td>
                <td valign="top">Head of Operations</td>
            </tr>
            <tr>
                <td valign="top">Facsimile No:</td>
                <td valign="top">01908  506169</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td valign="top"><strong>The Employer</strong></td>
                <td valign="top"><?php echo $employer_name;?></td>
            </tr>
            <tr>
                <td valign="top">Address:</td>
                <td valign="top"><?php echo $address_street;?>, <?php echo $address_city;?>, <?php echo $address_country;?>, <?php echo $address_code;?></td>
            </tr>
        </table>
    </body>
</html>
