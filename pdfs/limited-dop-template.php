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
            $employer_cont      =   $form_data ['field'] ['10.Employer contribution rate'];
            $member_cont        =   $form_data ['field'] ['11.Member contribution rate'];
            $salary_def         =   $form_data ['field'] ['12.Salary Definition'];
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
        <p><strong>DEED OF PARTICIPATION</strong></p>
        <p><strong>EXECUTION DATE:</strong></p>
        <p><strong>BETWEEN:</strong></p>
        <ol>
            <li><strong>AMBER TRUSTEES LIMITED</strong> a company incorporated in England and Wales (with registered number 08756896) whose registered office is at Paradigm House, Lower Meadow Road, Handforth, Wilmslow, Cheshire, SK9 3ND and <strong>CAREY CORPORATE TRUSTEES UK LIMITED</strong> a company incorporated in England and Wales (with registered number 09359872) whose registered office is at 1st Floor, Lakeside House, Shirwell Crescent, Furzton Lake, Milton Keynes, MK4 1GA (the “<strong>Trustees</strong>”); and
                <br>
                <br>
            </li>
            <li><strong><?php echo $employer_name;?></strong> a company incorporated in England and Wales (with registered number <?php echo $company_number;?>) whose registered office is at <?php echo $address_street;?>, <?php echo $address_city;?>, <?php echo $address_country;?>, <?php echo $address_code;?> (the “<strong>New Participating Employer</strong>”).
                <br>
                <br>
            </li>
        </ol>
        <p><strong>BACKGROUND</strong></p>
        <ol>
            <li>This deed is supplemental (inter alia) to a Trust Deed and Rules dated 17th December 2013 (the “Trust Deed” and the “Rules”).
                <br>
                <br>
            </li>
            <li>The Trustees are the present Trustees of the Amber Pension Trust (the “Scheme”).
                <br>
                <br>
            </li>
            <li>The Rules confer upon the Trustees the power to admit any Employer (as defined in the Rules) to participate in the Scheme.
                <br>
                <br>
            </li>
            <li>The Trustees wish to admit the New Participating Employer to participate in the Scheme as specified in this deed.
                <br>
                <br>
            </li>
            <li>The Trustees have delegated to Carey Corporate Trustees UK Limited the authority to execute this Deed on behalf of both the Trustees.
                <br>
                <br>
            </li>
        </ol>
        <p><strong>AGREED TERMS</strong></p>
        <ol>
            <li>The Trustees exercise their power to admit the New Participating Employer conferred on them by the Rules and all other relevant powers, as follows:
                    <br>
                    <br>
                <ol>
                    <li>The New Participating Employer is admitted to participate in the Scheme with effect from the Execution Date;
                        <br>
                        <br>
                    </li>
                    <li>The New Participating Employer’s workers (and, if applicable, all other ‘jobholders’ - as such term is defined in the Pensions Act 2008) are made eligible for membership of the Scheme with effect from the Execution Date, subject to the provisions of the Rules;
                        <br>
                        <br>
                    </li>
                    <li>The contributions payable monthly by the New Participating Employer and those persons to be admitted as members of the Scheme and on the date specified on or by the Trustees are, subject to clause 1.4, as follows:
                        <br>
                        <br>
                        <ol>
                            <li>Employer contribution rate:<?php echo $employer_cont;?>% of <?php echo $salary_def;?> per annum, and
                                <br>
                                <br>
                            </li>
                            <li>Member contribution rate: <?php echo $member_cont;?>% of <?php echo $salary_def;?> per annum; and
                                <br>
                                <br>
                            </li>
                        </ol>
                    </li>
                    <li>Where the New Participating Employer is using the Scheme for compliance with the automatic enrolment requirements under Part 1 of the Pensions Act 2008, it shall ensure that the contributions payable are consistent with those requirements.
                        <br>
                        <br>
                    </li>
                </ol>
            </li>
            <li>The New Participating Employer hereby agrees:
                <br>
                <br>
                <ol>
                    <li>To immediately pay to the Scheme Administrator the fees and charges notified in writing by the Scheme Administrator or the Trustees from time to time in force as payable by the New Participating Employer in connection with the Scheme (which, as of the Execution Date, are as set out in the Appendix to this deed), and</li>
                <br>
                <br>
                    <li>In the event the Scheme Administrator or the Trustees provide written notice to the New Participating Employer detailing any unpaid fees and charges that are due and payable in connection with the Scheme by any of the New Participating Employer’s workers, to immediately pay to the Scheme Administrator any such outstanding sum that would otherwise be payable by the worker (or workers) in question.</li>
                <br>
                <br>
                </ol>
            </li>
            <li>The New Participating Employer covenants with the Trustees that it will provide, in a timely manner, to those persons eligible for membership of the Scheme copies of such explanatory documentation relevant to the Scheme that the Trustees require the New Participating Employer to provide and, in particular, will (in any event) ensure that all eligible persons are given full written information as to:
                <br>
                <br>
                <ol>
                    <li>The actions (if any) required to be taken by them to become members of the Scheme,
                        <br>
                        <br>
                    </li>
                    <li>The contributions payable (by the New Participating Employer and the Scheme’s members) to the Scheme, and
                        <br>
                        <br>
                    </li>
                    <li>The fees and charges payable by the Scheme’s members in relation to membership of the Scheme.
                        <br>
                        <br>
                    </li>
                </ol>
            </li>
            <li>The New Participating Employer covenants with the Trustees that, with effect from the Execution Date, it will comply with and observe all of the provisions of the Trust Deed and the Rules (as amended from time to time) so far as they are applicable to the New Participating Employer as an Employer (as such term applies for the purpose of the Scheme) participating in the Scheme.</li>
                <br>
                <br>
            <li>The New Participating Employer hereby acknowledges that, under the Rules, its participation in the Scheme would cease if its contributions were to remain unpaid for a period of six months.</li>
                            <br>
                <br>
            <li>The New Participating Employer hereby appoints Amber Financial Investments Limited (and any successor from time to time as “the Company” under the Trust Deed and the Rules) to act on its behalf in exercising the right to be consulted on changes to the Statement of Investment Principles under section 35 of the Pensions Act 1995 (and in exercising any other rights of notification, consultation or consent under pensions legislation where the Company, acting in good faith, considers this appropriate taking into account the interests of the New Participating Employer and the efficient operation of the Scheme).</li>
                            <br>
                <br>
        </ol>
        <p>In witness of which this document was executed and, on the Execution Date, delivered as a deed.</p>
        <p>Executed by Carey Corporate Trustees UK Limited under delegated authority on behalf of the Trustees of the Amber Pension Trust</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table width="100%">
            <tbody>
                <tr>
                    <td width="50%">
                        <strong>EXECUTED</strong> as a Deed
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        (but not delivered until dated) by
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <strong>CAREY CORPORATE TRUSTEES UK LIMITED</strong>
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        acting by two Directors or a Director
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        and the Secretary:-
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <p>Authorised signatory</p>
        <p>&nbsp;</p>
        <p>Authorised signatory</p>
        <p>&nbsp;</p>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table width="100%">
            <tbody>
                <tr>
                    <td width="50%">
                        <strong>EXECUTED</strong> as a Deed
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        (but not delivered until dated) by
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        <strong><?php echo $employer_name;?></strong>
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        acting by two Directors or a Director
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
                <tr>
                    <td width="50%">
                        and the Secretary:-
                    </td>
                    <td width="50%">
                        )
                    </td>
                </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <p>Director</p>
        <p>&nbsp;</p>
        <p>Director/Secretary</p>
        <p>&nbsp;</p>
	</body>
</html>
