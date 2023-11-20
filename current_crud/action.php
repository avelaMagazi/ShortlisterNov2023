<?php
//Load Spreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

error_reporting(E_ALL);

$username = 'root';
$password = '';
$connection = new PDO( 'mysql:host=localhost;dbname=test', $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );  /* Create Object of PDO class by connecting to Mysql database */

/* $username = 'epiz_31957611';
$password = '123Ave!@';
$connection = new PDO( 'mysql:host=sql306.epizy.com;dbname=epiz_31957611_001', $username, $password );  */

if(isset($_POST["action"])) /* Check value of $_POST[action] variable value is set to not */
{

    
    /* For Load All Data inside tblcandidates*/
        if($_POST["action"] == "Load") 
        {
            $statement = $connection->prepare("SELECT * FROM tblcandidates ORDER BY candidateid DESC");
            $statement->execute();
            $result = $statement->fetchAll();
            $output = '';
            $output .= '
            <table class="table table-bordered">
                <tr>
                <th scope="col" id="th_Title">Title</th>
                <th scope="col" id="th_FullNames">Full Names</th>
                <th scope="col" id="th_Surname">Surname</th>
                <th scope="col" id="th_Age">Age</th>
                <th scope="col" id="th_Gender">Gender</th>
                <th scope="col" id="th_Id">ID Number</th>
                <th scope="col" id="th_Race">Race</th>
                <th scope="col" id="th_C_Rank">Current Rank</th>
                <th scope="col" id="th_C_Hq">Current Headquarters</th>
                <th scope="col" id="th_Landline">Landline Number</th>

                <th scope="col" id="th_Cell">Cellphone Number</th>
                <th scope="col" id="th_Fax">Fax Number</th>
                <th scope="col" id="th_Email">Email Address</th>
                <th scope="col" id="th_Exp">Experience</th>
                <th scope="col" id="th_Period">Period</th>
                <th scope="col" id="th_Duration">Duration</th>
                <th scope="col" id="th_G_total">Grand Total</th>
                <th scope="col" id="th_Qualification">Qualification/Year</th>
                <th scope="col" id="th_Disabled">Disabled</th>
                <th scope="col" id="th_DisableDetails">Disabilities Details</th>

                <th scope="col" id="">Application For Transfer</th>
                <th scope="col" id="">Motivation For Transfer Attached</th>
                <th scope="col" id="">Reason For Transfer</th>
                <th scope="col" id="">Remark</th>
                <th scope="col" id="">Reason for Disqualification</th>
                <th scope="col" id="">Acting Experience</th>
                <th scope="col" id="">Managerial Experience</th>

                <th scope="col" id="">Applied For RC President</th>
                <th scope="col" id="">Applied For Reg Mag</th>
                <th scope="col" id="">Applied For Chief Mag</th>
                <th scope="col" id="">Applied For Snr Judicial Educator </th>
                <th scope="col" id="">Shortlisted?</th>
                <tr>
            ';
            if($statement->rowCount() > 0)
            {
                foreach($result as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['full_names'].'</td>
                    <td>'.$row['surname']. '</td>
                    <td>'.$row['age'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['id_number'].'</td>
                    <td>'.$row['race'].'</td>
                    <td>'.$row['current_rank'].'</td>
                    <td>'.$row['current_headquarters'].'</td>
                    <td>'.$row['landline_number'].'</td>

                    <td>'.$row['cellphone_number'].'</td>
                    <td>'.$row['fax_number'].'</td>
                    <td>'.$row['email_address'].'</td>
                    <td>'.$row['experience1'].'</td>
                    <td>'.$row['period1'].'</td>
                    <td>'.$row['duration1'].'</td>
                    <td>'.$row['grand_total'].'</td>
                    <td>'.$row['qualification_year'].'</td>
                    <td>'.$row['disabled_person'].'</td>
                    <td>'.$row['disability_details'].'</td>

                    <td>'.$row['application_for_transfer'].'</td>
                    <td>'.$row['motivation_for_transfer_attached'].'</td>
                    <td>'.$row['reason_for_transfer'].'</td>
                    <td>'.$row['remarks'].'</td>
                    <td>'.$row['reason_for_dq'].'</td>
                    <td>'.$row['acting_experience'].'</td>
                    <td>'.$row['managerial_experience'].'</td>

                    <td>'.$row['applied_for_rcp'].'</td>
                    <td>'.$row['applied_for_reg_mag'].'</td>
                    <td>'.$row['applied_for_chief_mag']. '</td>
                    <td>'.$row['applied_for_snr_je'].'</td> 
                    <td>'.$row['is_shortlisted'].'</td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-warning btn-xs update">Update</button></td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-danger btn-xs delete">Delete</button></td>
                    </tr>
                    ';
                }
            }else
            {
                $output .= '
                    <tr>
                    <td align=center> Data not Found</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            echo $output;
        }
        
    /* Filter all rows to show shortlisted only */
        if ($_POST["action"] == "Shortlisted_Filter") {
            $statement = $connection->prepare("SELECT * FROM tblcandidates WHERE is_shortlisted = 'Yes' ORDER BY candidateid DESC");
            $statement->execute();
            $result = $statement->fetchAll();
            $output = '';
            $output .= '
            <table class="table table-bordered">
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Full Names</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">ID Number</th>
                <th scope="col">Race</th>
                <th scope="col">Current Rank</th>
                <th scope="col">Current Headquarters</th>
                <th scope="col">Landline Number</th>

                <th scope="col">Cellphone Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Experience</th>
                <th scope="col">Period</th>
                <th scope="col">Duration</th>
                <th scope="col">Grand Total</th>
                <th scope="col">Qualification/Year</th>
                <th scope="col">Disabled</th>
                <th scope="col">Disabilities Details</th>

                <th scope="col">Application For Transfer</th>
                <th scope="col">Motivation For Transfer Attached</th>
                <th scope="col">Reason For Transfer</th>
                <th scope="col">Remark</th>
                <th scope="col">Reason for Disqualification</th>
                <th scope="col">Acting Experience</th>
                <th scope="col">Managerial Experience</th>

                <th scope="col">Applied For RC President</th>
                <th scope="col">Applied For Reg Mag</th>
                <th scope="col">Applied For Chief Mag</th>
                <th scope="col">Applied For Snr Judicial Educator </th>
                <th scope="col">Shortlisted?</th>
                <tr>
            ';
            if($statement->rowCount() > 0)
            {
                foreach($result as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['full_names'].'</td>
                    <td>'.$row['surname']. '</td>
                    <td>'.$row['age'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['id_number'].'</td>
                    <td>'.$row['race'].'</td>
                    <td>'.$row['current_rank'].'</td>
                    <td>'.$row['current_headquarters'].'</td>
                    <td>'.$row['landline_number'].'</td>

                    <td>'.$row['cellphone_number'].'</td>
                    <td>'.$row['fax_number'].'</td>
                    <td>'.$row['email_address'].'</td>
                    <td>'.$row['experience1'].'</td>
                    <td>'.$row['period1'].'</td>
                    <td>'.$row['duration1'].'</td>
                    <td>'.$row['grand_total'].'</td>
                    <td>'.$row['qualification_year'].'</td>
                    <td>'.$row['disabled_person'].'</td>
                    <td>'.$row['disability_details'].'</td>

                    <td>'.$row['application_for_transfer'].'</td>
                    <td>'.$row['motivation_for_transfer_attached'].'</td>
                    <td>'.$row['reason_for_transfer'].'</td>
                    <td>'.$row['remarks'].'</td>
                    <td>'.$row['reason_for_dq'].'</td>
                    <td>'.$row['acting_experience'].'</td>
                    <td>'.$row['managerial_experience'].'</td>

                    <td>'.$row['applied_for_rcp'].'</td>
                    <td>'.$row['applied_for_reg_mag'].'</td>
                    <td>'.$row['applied_for_chief_mag']. '</td>
                    <td>'.$row['applied_for_snr_je'].'</td> 
                    <td>'.$row['is_shortlisted'].'</td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-warning btn-xs update">Update</button></td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-danger btn-xs delete">Delete</button></td>
                    </tr>
                    ';
                }
            }else
            {
                $output .= '
                    <tr>
                    <td align=center> Data not Found</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            echo $output;
        }

    /* Filter candidate details */
        if ($_POST["action"] == "filter_Options") {
            $statement = $connection->prepare("SELECT * FROM tblcandidates WHERE is_shortlisted = '".$_POST["is_shortlisted"]."' ORDER BY candidateid DESC");
            $statement->execute();
            $result = $statement->fetchAll();
            $output = '';
            $output .= '
            <table class="table table-bordered">
                <tr>
                <th scope="col">Tit1le</th>
                <th scope="col">Full Names</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">ID Number</th>
                <th scope="col">Race</th>
                <th scope="col">Current Rank</th>
                <th scope="col">Current Headquarters</th>
                <th scope="col">Landline Number</th>

                <th scope="col">Cellphone Number</th>
                <th scope="col">Fax Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Experience</th>
                <th scope="col">Period</th>
                <th scope="col">Duration</th>
                <th scope="col">Grand Total</th>
                <th scope="col">Qualification/Year</th>
                <th scope="col">Disabled</th>
                <th scope="col">Disabilities Details</th>

                <th scope="col">Application For Transfer</th>
                <th scope="col">Motivation For Transfer Attached</th>
                <th scope="col">Reason For Transfer</th>
                <th scope="col">Remark</th>
                <th scope="col">Reason for Disqualification</th>
                <th scope="col">Acting Experience</th>
                <th scope="col">Managerial Experience</th>

                <th scope="col">Applied For RC President</th>
                <th scope="col">Applied For RC President in GP</th>
                <th scope="col">Applied For RC President in WC</th>
                <th scope="col">Applied For RC President in KZN</th>
                <th scope="col">Applied For Reg Mag</th>
                <th scope="col">Applied For Reg Mag in GP</th>
                <th scope="col">Applied For Reg Mag in WC</th>
                <th scope="col">Applied For Reg Mag in KZN</th>
                <th scope="col">Applied For Chief Mag</th>
                <th scope="col">Applied For Chief Mag in GP</th>
                <th scope="col">Applied For Chief Mag in WC</th>
                <th scope="col">Applied For Chief Mag in KZN</th>
                <th scope="col">Applied For Snr Judicial Educator </th>
                <th scope="col">Applied For Snr Judicial Educator in GP</th>
                <th scope="col">Applied For Snr Judicial Educator in WC</th>
                <th scope="col">Applied For Snr Judicial Educator in KZN</th>
                <th scope="col">Shortlisted?</th>
                <tr>
            ';
            if($statement->rowCount() > 0)
            {
                foreach($result as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['full_names'].'</td>
                    <td>'.$row['surname']. '</td>
                    <td>'.$row['age'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['id_number'].'</td>
                    <td>'.$row['race'].'</td>
                    <td>'.$row['current_rank'].'</td>
                    <td>'.$row['current_headquarters'].'</td>
                    <td>'.$row['landline_number'].'</td>

                    <td>'.$row['cellphone_number'].'</td>
                    <td>'.$row['fax_number'].'</td>
                    <td>'.$row['email_address'].'</td>
                    <td>'.$row['experience1'].'</td>
                    <td>'.$row['period1'].'</td>
                    <td>'.$row['duration1'].'</td>
                    <td>'.$row['grand_total'].'</td>
                    <td>'.$row['qualification_year'].'</td>
                    <td>'.$row['disabled_person'].'</td>
                    <td>'.$row['disability_details'].'</td>

                    <td>'.$row['application_for_transfer'].'</td>
                    <td>'.$row['motivation_for_transfer_attached'].'</td>
                    <td>'.$row['reason_for_transfer'].'</td>
                    <td>'.$row['remarks'].'</td>
                    <td>'.$row['reason_for_dq'].'</td>
                    <td>'.$row['acting_experience'].'</td>
                    <td>'.$row['managerial_experience'].'</td>

                    <td>'.$row['applied_for_rcp'].'</td>
                    <td>'.$row['rcp_gp_cities'].'</td>
                    <td>'.$row['rcp_wc_cities'].'</td>
                    <td>'.$row['rcp_kzn_cities'].'</td>
                    <td>'.$row['rcp_ec_cities'].'</td>
                    <td>'.$row['rcp_mp_cities'].'</td>
                    <td>'.$row['rcp_fs_cities'].'</td>
                    <td>'.$row['rcp_lp_cities'].'</td>
                    <td>'.$row['rcp_nw_cities'].'</td>
                    <td>'.$row['rcp_np_cities'].'</td>

                    <td>'.$row['applied_for_reg_mag'].'</td>
                    <td>'.$row['rm_gp_cities'].'</td>
                    <td>'.$row['rm_wc_cities'].'</td>
                    <td>'.$row['rm_kzn_cities'].'</td>
                    <td>'.$row['rm_ec_cities'].'</td>
                    <td>'.$row['rm_mp_cities'].'</td>
                    <td>'.$row['rm_fs_cities'].'</td>
                    <td>'.$row['rm_lp_cities'].'</td>
                    <td>'.$row['rm_nw_cities'].'</td>
                    <td>'.$row['rm_np_cities'].'</td>

                    <td>'.$row['applied_for_chief_mag'].'</td>
                    <td>'.$row['cm_gp_cities'].'</td>
                    <td>'.$row['cm_wc_cities'].'</td>
                    <td>'.$row['cm_kzn_cities'].'</td>
                    <td>'.$row['cm_ec_cities'].'</td>
                    <td>'.$row['cm_mp_cities'].'</td>
                    <td>'.$row['cm_fs_cities'].'</td>
                    <td>'.$row['cm_lp_cities'].'</td>
                    <td>'.$row['cm_nw_cities'].'</td>
                    <td>'.$row['cm_np_cities'].'</td>
                    
                    <td>'.$row['applied_for_snr_je'].'</td>
                    <td>'.$row['snr_je_gp_cities'].'</td>
                    <td>'.$row['snr_je_wc_cities'].'</td>
                    <td>'.$row['snr_je_kzn_cities'].'</td>
                    <td>'.$row['snr_je_ec_cities'].'</td>
                    <td>'.$row['snr_je_mp_cities'].'</td>
                    <td>'.$row['snr_je_fs_cities'].'</td>
                    <td>'.$row['snr_je_lp_cities'].'</td>
                    <td>'.$row['snr_je_nw_cities'].'</td>
                    <td>'.$row['snr_je_np_cities'].'</td>
                    <td>'.$row['is_shortlisted'].'</td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-warning btn-xs update">Update</button></td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-danger btn-xs delete">Delete</button></td>
                    </tr>
                    ';
                }
            }else
            {
                $output .= '
                    <tr>
                    <td align=center> Data not Found</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            echo $output;
        }

    /* For Load tblshortlisted Data 
        if ($_POST["action"] == "LoadShortlisted") {
            $statement = $connection->prepare("SELECT * FROM tblshortlisted WHERE is_shortlisted = 'Yes' ORDER BY shortlisted_id DESC");
            $statement->execute();
            $result = $statement->fetchAll();
            $output = '';
            $output .= '
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Full Names</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">ID Number</th>
                    <th scope="col">Race</th>
                    <th scope="col">Current Rank</th>
                    <th scope="col">Current Headquarters</th>
                    <th scope="col">Landline Number</th>
                    <th scope="col">Cellphone Number</th>
                    <th scope="col">Fax Number</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Period</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Grand Total</th>
                    <th scope="col">Qualification/Year</th>
                    <th scope="col">Disabled</th>
                    <th scope="col">Disabilities Details</th>
                    <th scope="col">Application For Transfer</th>
                    <th scope="col">Motivation For Transfer Attached</th>
                    <th scope="col">Reason For Transfer</th>
                    <th scope="col">Remark</th>
                    <th scope="col">Reason for Disqualification</th>
                    <th scope="col">Acting Experience</th>
                    <th scope="col">Managerial Experience</th>
                    <th scope="col">Applied For RC President</th>
                    <th scope="col">Applied For Reg Mag</th>
                    <th scope="col">Applied For Chief Mag</th>
                    <th scope="col">Applied For Snr Judicial Educator </th>
                    <th scope="col">Shortlisted?</th>
                <tr>
            ';
            if($statement->rowCount() > 0)
            {
                foreach($result as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row['title'].'</td>
                    <td>'.$row['full_names'].'</td>
                    <td>'.$row['surname']. '</td>
                    <td>'.$row['age'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['id_number'].'</td>
                    <td>'.$row['race'].'</td>
                    <td>'.$row['current_rank'].'</td>
                    <td>'.$row['current_headquarters'].'</td>
                    <td>'.$row['landline_number'].'</td>
                    <td>'.$row['cellphone_number'].'</td>
                    <td>'.$row['fax_number'].'</td>
                    <td>'.$row['email_address'].'</td>
                    <td>'.$row['experience1'].'</td>
                    <td>'.$row['period1'].'</td>
                    <td>'.$row['duration1'].'</td>
                    <td>'.$row['grand_total'].'</td>
                    <td>'.$row['qualification_year'].'</td>
                    <td>'.$row['disabled_person'].'</td>
                    <td>'.$row['disability_details'].'</td>
                    <td>'.$row['application_for_transfer'].'</td>
                    <td>'.$row['motivation_for_transfer_attached'].'</td>
                    <td>'.$row['reason_for_transfer'].'</td>
                    <td>'.$row['remarks'].'</td>
                    <td>'.$row['reason_for_dq'].'</td>
                    <td>'.$row['acting_experience'].'</td>
                    <td>'.$row['managerial_experience'].'</td>
                    <td>'.$row['applied_for_rcp'].'</td>
                    <td>'.$row['applied_for_reg_mag'].'</td>
                    <td>'.$row['applied_for_chief_mag']. '</td>
                    <td>'.$row['applied_for_snr_je'].'</td> 
                    <td>'.$row['is_shortlisted'].'</td>
                    <td> <button type="button" id="'.$row['candidateid'].'" href="update_candidate.php" class="btn btn-warning btn-xs">Update</button></td>
                    <td> <button type="button" id="'.$row['candidateid'].'" class="btn btn-danger btn-xs delete">Delete</button></td>
                    </tr>
                    ';
                }
            }else
            {
                $output .= '
                    <tr>
                    <td align=center> Data not Found</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            echo $output;
        }   */  

    /* Testing */
        if ($_POST["action"] == "Testing") {
            echo("Hello");
            /* Figure out where each candidate applied. First Pretoria then Joburg */
            /* switch (n) {
                case label1:
                code to be executed if n=label1;
                create table if appliedRCP = pretoria
                
                break;
                case label2:
                code to be executed if n=label2;
                create table if appliedRCP = jhb
                break;
                case label3:
                code to be executed if n=label3;
                create table if appliedRCP = jhb
                break;
                ...
                default:
                code to be executed if n is different from all labels;
            } 
                switch ($RCP_Cities) {
                        case 'pretoria':
                            console.log("Pretoria will be built");
                            break;
                            case 'johannesburg':
                                console.log("Pretoria will be built");
                                break;
                        default:
                            # code...
                            break;
                }*/
        }

    /* Create tblcandidates (C)RUD*/
    /* vardump shows me the information so its definitely trying to add */
        if($_POST["action"] == "Create")
        {
            $statement = $connection->prepare(
            "INSERT INTO tblcandidates (title, full_names, surname, age, gender, id_number, race, 
                current_rank, current_headquarters, landline_number, cellphone_number, fax_number, email_address,
                experience1, period1, duration1,
                grand_total, qualification_year, disabled_person, disability_details,
                application_for_transfer, motivation_for_transfer_attached, reason_for_transfer, remarks, reason_for_dq, acting_experience, managerial_experience,
                applied_for_rcp, rcp_gp_cities, rcp_wc_cities, rcp_kzn_cities, 
                rcp_ec_cities, rcp_mp_cities, rcp_fs_cities, rcp_lp_cities, rcp_nw_cities, rcp_np_cities, 
                applied_for_reg_mag, rm_gp_cities, rm_wc_cities, rm_kzn_cities, 
                rm_ec_cities, rm_mp_cities, rm_fs_cities, rm_lp_cities, rm_nw_cities, rm_np_cities, 
                applied_for_chief_mag, cm_gp_cities, cm_wc_cities, cm_kzn_cities,
                cm_ec_cities, cm_mp_cities, cm_fs_cities, cm_lp_cities, cm_nw_cities, cm_np_cities,
                applied_for_snr_je, snr_je_gp_cities, snr_je_wc_cities, snr_je_kzn_cities,
                snr_je_ec_cities, snr_je_mp_cities, snr_je_fs_cities, snr_je_lp_cities, snr_je_nw_cities, snr_je_np_cities,
                is_shortlisted
                )
            VALUES (:title, :full_names, :surname, :age, :gender, :id_number, :race, 
                :current_rank, :current_headquarters, :landline_number, :cellphone_number, :fax_number, :email_address,
                :experience1, :period1, :duration1,
                :grand_total, :qualification_year, :disabled_person, :disability_details,
                :application_for_transfer, :motivation_for_transfer_attached, :reason_for_transfer, :remarks, :reason_for_dq, :acting_experience, :managerial_experience,
                :applied_for_rcp, :rcp_gp_cities, :rcp_wc_cities, :rcp_kzn_cities,
                :rcp_ec_cities, :rcp_mp_cities, :rcp_fs_cities, :rcp_lp_cities, :rcp_nw_cities, :rcp_np_cities, 
                :applied_for_reg_mag, :rm_gp_cities, :rm_wc_cities, :rm_kzn_cities, 
                :rm_ec_cities, :rm_mp_cities, :rm_fs_cities, :rm_lp_cities, :rm_nw_cities, :rm_np_cities, 
                :applied_for_chief_mag, :cm_gp_cities, :cm_wc_cities, :cm_kzn_cities,
                :cm_ec_cities, :cm_mp_cities, :cm_fs_cities, :cm_lp_cities, :cm_nw_cities, :cm_np_cities,
                :applied_for_snr_je, :snr_je_gp_cities, :snr_je_wc_cities, :snr_je_kzn_cities,
                :snr_je_ec_cities, :snr_je_mp_cities, :snr_je_fs_cities, :snr_je_lp_cities, :snr_je_nw_cities, :snr_je_np_cities,
                :is_shortlisted 
                )"
            );
            $result = $statement->execute(
                array(
                    ':title' => $_POST["title"],
                    ':full_names' => $_POST["full_names"],
                    ':surname' => $_POST["surname"],
                    ':age' => $_POST["age"],
                    ':gender' => $_POST["gender"],
                    ':id_number' => $_POST["id_number"],
                    ':race' => $_POST["race"],
                    ':current_rank' => $_POST["current_rank"],
                    ':current_headquarters' => $_POST["current_headquarters"],
                    ':landline_number' => $_POST["landline_number"],
                    ':cellphone_number' => $_POST["cellphone_number"],
                    ':fax_number' => $_POST["fax_number"],
                    ':email_address' => $_POST["email_address"],
                    ':experience1' => $_POST["experience1"],
                    ':period1' => $_POST["period1"],
                    ':duration1' => $_POST["duration1"],
                    ':grand_total' => $_POST["grand_total"],
                    ':qualification_year' => $_POST["qualification_year"],
                    ':disabled_person' => $_POST["disabled_person"],
                    ':disability_details' => $_POST["disability_details"],
                    ':application_for_transfer' => $_POST["application_for_transfer"],
                    ':motivation_for_transfer_attached' => $_POST["motivation_for_transfer_attached"],
                    ':reason_for_transfer' => $_POST["reason_for_transfer"],
                    ':remarks' => $_POST["remarks"],
                    ':reason_for_dq' => $_POST["reason_for_dq"],
                    ':acting_experience' => $_POST["acting_experience"],
                    ':managerial_experience' => $_POST["managerial_experience"],
                    ':applied_for_rcp' => $_POST["applied_for_rcp"],
                    ':rcp_gp_cities' => $_POST["rcp_gp_cities"],
                    ':rcp_wc_cities' => $_POST["rcp_wc_cities"],
                    ':rcp_kzn_cities' => $_POST["rcp_kzn_cities"],
                    ':rcp_ec_cities' => $_POST["rcp_ec_cities"],
                    ':rcp_mp_cities' => $_POST["rcp_mp_cities"],
                    ':rcp_fs_cities' => $_POST["rcp_fs_cities"],
                    ':rcp_lp_cities' => $_POST["rcp_lp_cities"],
                    ':rcp_nw_cities' => $_POST["rcp_nw_cities"],
                    ':rcp_np_cities' => $_POST["rcp_np_cities"],
                    ':applied_for_reg_mag' => $_POST["applied_for_reg_mag"],
                    ':rm_gp_cities' => $_POST["rm_gp_cities"],
                    ':rm_wc_cities' => $_POST["rm_wc_cities"],
                    ':rm_kzn_cities' => $_POST["rm_kzn_cities"],
                    ':rm_ec_cities' => $_POST["rm_ec_cities"],
                    ':rm_mp_cities' => $_POST["rm_mp_cities"],
                    ':rm_fs_cities' => $_POST["rm_fs_cities"],
                    ':rm_lp_cities' => $_POST["rm_lp_cities"],
                    ':rm_nw_cities' => $_POST["rm_nw_cities"],
                    ':rm_np_cities' => $_POST["rm_np_cities"],
                    ':applied_for_chief_mag' => $_POST["applied_for_chief_mag"],
                    ':cm_gp_cities' => $_POST["cm_gp_cities"],
                    ':cm_wc_cities' => $_POST["cm_wc_cities"],
                    ':cm_kzn_cities' => $_POST["cm_kzn_cities"],
                    ':cm_ec_cities' => $_POST["cm_ec_cities"],
                    ':cm_mp_cities' => $_POST["cm_mp_cities"],
                    ':cm_fs_cities' => $_POST["cm_fs_cities"],
                    ':cm_lp_cities' => $_POST["cm_lp_cities"],
                    ':cm_nw_cities' => $_POST["cm_nw_cities"],
                    ':cm_np_cities' => $_POST["cm_np_cities"],
                    ':applied_for_snr_je' => $_POST["applied_for_snr_je"],
                    ':snr_je_gp_cities' => $_POST["snr_je_gp_cities"],
                    ':snr_je_wc_cities' => $_POST["snr_je_wc_cities"],
                    ':snr_je_kzn_cities' => $_POST["snr_je_kzn_cities"],
                    ':snr_je_ec_cities' => $_POST["snr_je_ec_cities"],
                    ':snr_je_mp_cities' => $_POST["snr_je_mp_cities"],
                    ':snr_je_fs_cities' => $_POST["snr_je_fs_cities"],
                    ':snr_je_lp_cities' => $_POST["snr_je_lp_cities"],
                    ':snr_je_nw_cities' => $_POST["snr_je_nw_cities"],
                    ':snr_je_np_cities' => $_POST["snr_je_np_cities"],
                    ':is_shortlisted' => $_POST["is_shortlisted"]
                )
            ); 
            
                /*
                    $statement = $connection->prepare(
                    "INSERT INTO tblappliedcities (candidateid, applied_for_rcp, rcp_gp,
                        rcp_lp, rcp_fs, rcp_mp, rcp_ec, rcp_nw, rcp_kzn, rcp_wc, rcp_nc
                        )
                    VALUES (:candidateid, :applied_for_rcp, :rcp_gp,
                        :rcp_lp, :rcp_fs, :rcp_mp, :rcp_ec, :rcp_nw, :rcp_kzn, :rcp_wc, :rcp_nc
                        )"
                    );
                    $result = $statement->execute(
                        array(
                            ':candidateid' => $_POST["candidateid"],
                            ':applied_for_rcp' => $_POST["applied_for_rcp"],
                            ':rcp_gp' => $_POST["rcp_gp"],
                            ':rcp_lp' => $_POST["rcp_lp"],
                            ':rcp_fs' => $_POST["rcp_fs"],
                            ':rcp_mp' => $_POST["rcp_mp"],
                            ':rcp_ec' => $_POST["rcp_ec"],
                            ':rcp_nw' => $_POST["rcp_nw"],
                            ':rcp_kzn' => $_POST["rcp_kzn"],
                            ':rcp_wc' => $_POST["rcp_wc"],
                            ':rcp_nc' => $_POST["rcp_nc"]
                        )
                    );
                */

           /*if (isset($_POST["applied_for_rcp"])) {
                 if (isset($_POST["chkbx_RCP_Gauteng"])) {
                    echo ("This works");
                    $statement = $connection->prepare(
                        "INSERT INTO tblappliedcities (candidateid, applied_for_rcp, rcp_gp_cities )
                        VALUES (:candidateid, :applied_for_rcp, :rcp_gp_cities )"
                        );
                        $result = $statement->execute(
                            array(
                                ':candidateid' => $_POST["candidateid"],
                                ':applied_for_rcp' => $_POST["applied_for_rcp"],
                                ':rcp_gp_cities' => $_POST["rcp_gp_cities"]
                            )
                        );
                } */
                /* if (isset($_POST["chkbx_RCP_WP"])) {
                    $statement = $connection->prepare(
                        "INSERT INTO tblappliedcities (candidateid, applied_for_rcp, rcp_wc_cities )
                        VALUES (:candidateid, :applied_for_rcp, :rcp_wp_cities )"
                        );
                        $result = $statement->execute(
                            array(
                                ':candidateid' => $_POST["candidateid"],
                                ':applied_for_rcp' => $_POST["applied_for_rcp"],
                                ':rcp_wp_cities' => $_POST["rcp_wp_cities"]
                            )
                        );
                } */
                /* if (isset($_POST["chkbx_RCP_KZN"])) {
                    $statement = $connection->prepare(
                        "INSERT INTO tblappliedcities (candidateid, applied_for_rcp, rcp_kzn_cities )
                        VALUES (:candidateid, :applied_for_rcp, :rcp_kzn_cities )"
                        );
                        $result = $statement->execute(
                            array(
                                ':candidateid' => $_POST["candidateid"],
                                ':applied_for_rcp' => $_POST["applied_for_rcp"],
                                ':rcp_kzn_cities' => $_POST["rcp_kzn_cities"]
                            )
                        );
                } 
            }*/

            /* if (isset($_POST["applied_for_reg_mag"])) {
                $statement = $connection->prepare(
                    "INSERT INTO tblappliedcities (candidateid, applied_for_reg_mag, rm_gp,
                        rm_lp, rm_fs, rm_mp, rm_ec, rm_nw, rm_kzn, rm_wc, rm_nc
                        )
                    VALUES (:candidateid, :applied_for_reg_mag, :rm_gp,
                        :rm_lp, :rm_fs, :rm_mp, :rm_ec, :rm_nw, :rm_kzn, :rm_wc, :rm_nc
                        )"
                    );
                    $result = $statement->execute(
                        array(
                            ':candidateid' => $_POST["candidateid"],
                            ':applied_for_reg_mag' => $_POST["applied_for_reg_mag"],
                            ':rm_gp' => $_POST["rm_gp"],
                            ':rm_lp' => $_POST["rm_lp"],
                            ':rm_fs' => $_POST["rm_fs"],
                            ':rm_mp' => $_POST["rm_mp"],
                            ':rm_ec' => $_POST["rm_ec"],
                            ':rm_nw' => $_POST["rm_nw"],
                            ':rm_kzn' => $_POST["rm_kzn"],
                            ':rm_wc' => $_POST["rm_wc"],
                            ':rm_nc' => $_POST["rm_nc"]
                        )
                    );
            } */
           
            /* if (isset($_POST["applied_for_chief_mag"])) {
                $statement = $connection->prepare(
                    "INSERT INTO tblappliedcities (candidateid, applied_for_chief_mag, cm_gp,
                        cm_lp, cm_fs, cm_mp, cm_ec, cm_nw, cm_kzn, cm_wc, cm_nc
                        )
                    VALUES (:candidateid, :applied_for_chief_mag, :cm_gp,
                        :cm_lp, :cm_fs, :cm_mp, :cm_ec, :cm_nw, :cm_kzn, :cm_wc, :cm_nc
                        )"
                    );
                    $result = $statement->execute(
                        array(
                            ':candidateid' => $_POST["candidateid"],
                            ':applied_for_chief_mag' => $_POST["applied_for_chief_mag"],
                            ':cm_gp' => $_POST["cm_gp"],
                            ':cm_lp' => $_POST["cm_lp"],
                            ':cm_fs' => $_POST["cm_fs"],
                            ':cm_mp' => $_POST["cm_mp"],
                            ':cm_ec' => $_POST["cm_ec"],
                            ':cm_nw' => $_POST["cm_nw"],
                            ':cm_kzn' => $_POST["cm_kzn"],
                            ':cm_wc' => $_POST["cm_wc"],
                            ':cm_nc' => $_POST["cm_nc"]
                        )
                    );
            } */

            /* if (isset($_POST["applied_for_snr_je"])) {
                $statement = $connection->prepare(
                    "INSERT INTO tblappliedcities (candidateid, applied_for_snr_je, snr_je_gp,
                        snr_je_lp, snr_je_fs, snr_je_mp, snr_je_ec, snr_je_nw, rcp_kzn, rcp_wc, rcp_nc
                        )
                    VALUES (:candidateid, :applied_for_snr_je, :snr_je_gp,
                        :snr_je_lp, :snr_je_fs, :snr_je_mp, :snr_je_ec, :snr_je_nw, :snr_je_kzn, :snr_je_wc, :snr_je_nc
                        )"
                    );
                    $result = $statement->execute(
                        array(
                            ':candidateid' => $_POST["candidateid"],
                            ':applied_for_snr_je' => $_POST["applied_for_snr_je"],
                            ':snr_je_gp' => $_POST["snr_je_gp"],
                            ':snr_je_lp' => $_POST["snr_je_lp"],
                            ':snr_je_fs' => $_POST["snr_je_fs"],
                            ':snr_je_mp' => $_POST["snr_je_mp"],
                            ':snr_je_ec' => $_POST["snr_je_ec"],
                            ':snr_je_nw' => $_POST["snr_je_nw"],
                            ':snr_je_kzn' => $_POST["snr_je_kzn"],
                            ':snr_je_wc' => $_POST["snr_je_wc"],
                            ':snr_je_nc' => $_POST["snr_je_nc"]
                        )
                    );
            } */

            if(!empty($result)){
            echo 'Data Inserted';
            }
        }
        
    /* Select tblCandidates selecting C(R)UD */
    /*  This Code is for fetch single customer data for display on Modal */
        if($_POST["action"] == "Select")
        {
            $output = array();

            $statement = $connection->prepare(
            "SELECT * FROM tblcandidates 
            WHERE candidateid = '".$_POST["id"]."'
            LIMIT 1"
            );
            $statement->execute();
            $result = $statement->fetchAll();

            foreach($result as $row)
            {
                $output["title"] = $row["title"];
                $output["full_names"] = $row["full_names"];
                $output["surname"] = $row["surname"];
                $output["age"] = $row["age"];
                $output["gender"] = $row["gender"];
                $output["id_number"] = $row["id_number"];
                $output["race"] = $row["race"];
                $output["current_rank"] = $row["current_rank"];
                $output["current_headquarters"] = $row["current_headquarters"];
                $output["landline_number"] = $row["landline_number"];
                $output["cellphone_number"] = $row["cellphone_number"];
                $output["fax_number"] = $row["fax_number"];
                $output["email_address"] = $row["email_address"];
                $output["experience1"] = $row["experience1"];
                $output["period1"] = $row["period1"];
                $output["duration1"] = $row["duration1"];
                $output["grand_total"] = $row["grand_total"];
                $output["qualification_year"] = $row["qualification_year"];
                $output["disabled_person"] = $row["disabled_person"];
                $output["disability_details"] = $row["disability_details"];
                $output["application_for_transfer"] = $row["application_for_transfer"];
                $output["motivation_for_transfer_attached"] = $row["motivation_for_transfer_attached"];
                $output["reason_for_transfer"] = $row["reason_for_transfer"];
                $output["remarks"] = $row["remarks"];
                $output["reason_for_dq"] = $row["reason_for_dq"];
                $output["acting_experience"] = $row["acting_experience"];
                $output["managerial_experience"] = $row["managerial_experience"];
                $output["applied_for_rcp"] = $row["applied_for_rcp"];
                $output["rcp_gp_cities"] = $row["rcp_gp_cities"];
                $output["rcp_wc_cities"] = $row["rcp_wc_cities"];
                $output["rcp_kzn_cities"] = $row["rcp_kzn_cities"];
                $output["rcp_ec_cities"] = $row["rcp_ec_cities"];
                $output["rcp_mp_cities"] = $row["rcp_mp_cities"];
                $output["rcp_fs_cities"] = $row["rcp_fs_cities"];
                $output["rcp_lp_cities"] = $row["rcp_lp_cities"];
                $output["rcp_nw_cities"] = $row["rcp_nw_cities"];
                $output["rcp_np_cities"] = $row["rcp_np_cities"];
                $output["applied_for_reg_mag"] = $row["applied_for_reg_mag"];
                $output["rm_gp_cities"] = $row["rm_gp_cities"];
                $output["rm_wc_cities"] = $row["rm_wc_cities"];
                $output["rm_kzn_cities"] = $row["rm_kzn_cities"];
                $output["rm_ec_cities"] = $row["rm_ec_cities"];
                $output["rm_mp_cities"] = $row["rm_mp_cities"];
                $output["rm_fs_cities"] = $row["rm_fs_cities"];
                $output["rm_lp_cities"] = $row["rm_lp_cities"];
                $output["rm_nw_cities"] = $row["rm_nw_cities"];
                $output["rm_np_cities"] = $row["rm_np_cities"];
                $output["applied_for_chief_mag"] = $row["applied_for_chief_mag"];
                $output["cm_gp_cities"] = $row["cm_gp_cities"];
                $output["cm_wc_cities"] = $row["cm_wc_cities"];
                $output["cm_kzn_cities"] = $row["cm_kzn_cities"];
                $output["cm_ec_cities"] = $row["cm_ec_cities"];
                $output["cm_mp_cities"] = $row["cm_mp_cities"];
                $output["cm_fs_cities"] = $row["cm_fs_cities"];
                $output["cm_lp_cities"] = $row["cm_lp_cities"];
                $output["cm_nw_cities"] = $row["cm_nw_cities"];
                $output["cm_np_cities"] = $row["cm_np_cities"];
                $output["applied_for_snr_je"] = $row["applied_for_snr_je"];
                $output["snr_je_gp_cities"] = $row["snr_je_gp_cities"];
                $output["snr_je_wc_cities"] = $row["snr_je_wc_cities"];
                $output["snr_je_kzn_cities"] = $row["snr_je_kzn_cities"];
                $output["snr_je_ec_cities"] = $row["snr_je_ec_cities"];
                $output["snr_je_mp_cities"] = $row["snr_je_mp_cities"];
                $output["snr_je_fs_cities"] = $row["snr_je_fs_cities"];
                $output["snr_je_lp_cities"] = $row["snr_je_lp_cities"];
                $output["snr_je_nw_cities"] = $row["snr_je_nw_cities"];
                $output["snr_je_np_cities"] = $row["snr_je_np_cities"];
                $output["is_shortlisted"] = $row["is_shortlisted"];
            }
            echo json_encode($output);

            //echo $output['applied_for_rcp'];
            
            /* if(!empty($_POST['applied_for_rcp'])) {    
                
                    echo $row['applied_for_rcp'];
               
                //print_r($value);
            } */
            //Trying to get values from database for checkboxes
            /* if (isset($_POST['select'])) {
                foreach($_POST['select'] as $value){
                    echo $value;
                }
            } else {
                $value = $_POST['invite'];
                echo $value;
            } */
            
        }

    /*  Select tblshortlisted This Code is for fetch single From Shortlisted data for display on Modal
        if($_POST["action"] == "selectShort")
        {
            $output = array();

            $statement = $connection->prepare(
            "SELECT * FROM tblshortlisted
            WHERE shortlisted_id = '".$_POST["id"]."'
            LIMIT 1"
            );
            $statement->execute();
            $result = $statement->fetchAll();

            /* print_r($result()); 
            foreach($result as $row)
            {
                $output["first_name"] = $row["first_name"];
                $output["surname"] = $row["surname"];
                $output["gender"] = $row["gender"];
                $output["dateofbirth"] = $row["dateofbirth"];
                $output["email_addr"] = $row["email_addr"];
                $output["home_addr"] = $row["home_addr"];
                $output["address2"] = $row["address2"];
                $output["city"] = $row["city"];
                $output["province"] = $row["province"];
                $output["qualification"] = $row["qualification"];
                $output["shortlist_status"] = $row["shortlist_status"];
            }
            echo json_encode($output);
        }*/

    /*  Update tblCandidate CR(U)D */
        if($_POST["action"] == "Update")
        {
            $statement = $connection->prepare(
            "UPDATE tblcandidates
            SET title = :title,
            full_names = :full_names,
            surname = :surname,
            age = :age,
            gender = :gender,
            id_number = :id_number,
            race = :race,
            current_rank = :current_rank,
            current_headquarters = :current_headquarters,
            landline_number = :landline_number, 
            cellphone_number = :cellphone_number,
            fax_number = :fax_number,
            email_address = :email_address,
            experience1 = :experience1,
            period1 = :period1,
            duration1 = :duration1,
            grand_total = :grand_total,
            qualification_year = :qualification_year,
            disabled_person = :disabled_person,
            disability_details = :disability_details, 
            application_for_transfer = :application_for_transfer,
            motivation_for_transfer_attached = :motivation_for_transfer_attached,
            reason_for_transfer = :reason_for_transfer,
            remarks = :remarks,
            reason_for_dq = :reason_for_dq,
            acting_experience = :acting_experience,
            managerial_experience = :managerial_experience,
            applied_for_rcp = :applied_for_rcp,
            rcp_gp_cities = :rcp_gp_cities,
            rcp_wc_cities = :rcp_wc_cities,
            rcp_kzn_cities = :rcp_kzn_cities,
            rcp_ec_cities = :rcp_ec_cities,
            rcp_mp_cities = :rcp_mp_cities,
            rcp_fs_cities = :rcp_fs_cities,
            rcp_lp_cities = :rcp_lp_cities,
            rcp_nw_cities = :rcp_nw_cities,
            rcp_np_cities = :rcp_np_cities,
            applied_for_reg_mag = :applied_for_reg_mag,
            rm_gp_cities = :rm_gp_cities,
            rm_wc_cities = :rm_wc_cities,
            rm_kzn_cities = :rm_kzn_cities,
            rm_ec_cities = :rm_ec_cities,
            rm_mp_cities = :rm_mp_cities,
            rm_fs_cities = :rm_fs_cities,
            rm_lp_cities = :rm_lp_cities,
            rm_nw_cities = :rm_nw_cities,
            rm_np_cities = :rm_np_cities,
            applied_for_chief_mag = :applied_for_chief_mag,
            cm_gp_cities =  :cm_gp_cities,
            cm_wc_cities = :cm_wc_cities,
            cm_kzn_cities = :cm_kzn_cities,
            cm_ec_cities = :cm_ec_cities,
            cm_mp_cities = :cm_mp_cities,
            cm_fs_cities = :cm_fs_cities,
            cm_lp_cities = :cm_lp_cities,
            cm_nw_cities = :cm_nw_cities,
            cm_np_cities = :cm_np_cities,
            applied_for_snr_je = :applied_for_snr_je,
            snr_je_gp_cities = :snr_je_gp_cities,
            snr_je_wc_cities = :snr_je_wc_cities,
            snr_je_kzn_cities = :snr_je_kzn_cities,
            snr_je_ec_cities = :snr_je_ec_cities,
            snr_je_mp_cities = :snr_je_mp_cities,
            snr_je_fs_cities = :snr_je_fs_cities,
            snr_je_lp_cities = :snr_je_lp_cities,
            snr_je_nw_cities = :snr_je_nw_cities,
            snr_je_np_cities = :snr_je_np_cities,
            is_shortlisted = :is_shortlisted
            WHERE candidateid = :id
            "
            );
            $result = $statement->execute(
                array(                
                    ':title' => $_POST["title"],
                    ':full_names' => $_POST["full_names"],
                    ':surname' => $_POST["surname"],
                    ':age' => $_POST["age"],
                    ':gender' => $_POST["gender"],
                    ':id_number' => $_POST["id_number"],
                    ':race' => $_POST["race"],
                    ':current_rank' => $_POST["current_rank"],
                    ':current_headquarters' => $_POST["current_headquarters"],
                    ':landline_number' => $_POST["landline_number"],
                    ':cellphone_number' => $_POST["cellphone_number"],
                    ':fax_number' => $_POST["fax_number"],
                    ':email_address' => $_POST["email_address"],
                    ':experience1' => $_POST["experience1"],
                    ':period1' => $_POST["period1"],
                    ':duration1' => $_POST["duration1"],
                    ':grand_total' => $_POST["grand_total"],
                    ':qualification_year' => $_POST["qualification_year"],
                    ':disabled_person' => $_POST["disabled_person"],
                    ':disability_details' => $_POST["disability_details"],
                    ':application_for_transfer' => $_POST["application_for_transfer"],
                    ':motivation_for_transfer_attached' => $_POST["motivation_for_transfer_attached"],
                    ':reason_for_transfer' => $_POST["reason_for_transfer"],
                    ':remarks' => $_POST["remarks"],
                    ':reason_for_dq' => $_POST["reason_for_dq"],
                    ':acting_experience' => $_POST["acting_experience"],
                    ':managerial_experience' => $_POST["managerial_experience"],
                    ':applied_for_rcp' => $_POST["applied_for_rcp"],
                    ':rcp_gp_cities' => $_POST["rcp_gp_cities"],
                    ':rcp_wc_cities' => $_POST["rcp_wc_cities"],
                    ':rcp_kzn_cities' => $_POST["rcp_kzn_cities"],
                    ':rcp_ec_cities' => $_POST["rcp_ec_cities"],
                    ':rcp_mp_cities' => $_POST["rcp_mp_cities"],
                    ':rcp_fs_cities' => $_POST["rcp_fs_cities"],
                    ':rcp_lp_cities' => $_POST["rcp_lp_cities"],
                    ':rcp_nw_cities' => $_POST["rcp_nw_cities"],
                    ':rcp_np_cities' => $_POST["rcp_np_cities"],
                    ':applied_for_reg_mag' => $_POST["applied_for_reg_mag"],
                    ':rm_gp_cities' => $_POST["rm_gp_cities"],
                    ':rm_wc_cities' => $_POST["rm_wc_cities"],
                    ':rm_kzn_cities' => $_POST["rm_kzn_cities"],
                    ':rm_ec_cities' => $_POST["rm_ec_cities"],
                    ':rm_mp_cities' => $_POST["rm_mp_cities"],
                    ':rm_fs_cities' => $_POST["rm_fs_cities"],
                    ':rm_lp_cities' => $_POST["rm_lp_cities"],
                    ':rm_nw_cities' => $_POST["rm_nw_cities"],
                    ':rm_np_cities' => $_POST["rm_np_cities"],
                    ':applied_for_chief_mag' => $_POST["applied_for_chief_mag"],
                    ':cm_gp_cities' => $_POST["cm_gp_cities"],
                    ':cm_wc_cities' => $_POST["cm_wc_cities"],
                    ':cm_kzn_cities' => $_POST["cm_kzn_cities"],
                    ':cm_ec_cities' => $_POST["cm_ec_cities"],
                    ':cm_mp_cities' => $_POST["cm_mp_cities"],
                    ':cm_fs_cities' => $_POST["cm_fs_cities"],
                    ':cm_lp_cities' => $_POST["cm_lp_cities"],
                    ':cm_nw_cities' => $_POST["cm_nw_cities"],
                    ':cm_np_cities' => $_POST["cm_np_cities"],
                    ':applied_for_snr_je' => $_POST["applied_for_snr_je"],
                    ':snr_je_gp_cities' => $_POST["snr_je_gp_cities"],
                    ':snr_je_wc_cities' => $_POST["snr_je_wc_cities"],
                    ':snr_je_kzn_cities' => $_POST["snr_je_kzn_cities"],
                    ':snr_je_ec_cities' => $_POST["snr_je_ec_cities"],
                    ':snr_je_mp_cities' => $_POST["snr_je_mp_cities"],
                    ':snr_je_fs_cities' => $_POST["snr_je_fs_cities"],
                    ':snr_je_lp_cities' => $_POST["snr_je_lp_cities"],
                    ':snr_je_nw_cities' => $_POST["snr_je_nw_cities"],
                    ':snr_je_np_cities' => $_POST["snr_je_np_cities"],
                    ':is_shortlisted' => $_POST["is_shortlisted"],
                    ':id' => $_POST["id"]
                )
            );
            
            if(!empty($result))
            {
                /* if($_POST["is_shortlisted"] == "Yes") {
                    $statement = $connection->prepare(
                        "INSERT INTO tblshortlisted ( candidateid, title, full_names, surname, age, gender, id_number, race,
                        current_rank, current_headquarters, landline_number, cellphone_number, fax_number, email_address,
                        experience1, period1, duration1,
                        grand_total, qualification_year, disabled_person, disability_details, application_for_transfer,
                        motivation_for_transfer_attached, reason_for_transfer, remarks, reason_for_dq, 
                        acting_experience, managerial_experience, applied_for_rcp, applied_for_reg_mag, 
                        applied_for_chief_mag, applied_for_snr_je, is_shortlisted)  
                        VALUES (:candidateid, :title, :full_names, :surname, :age, :gender, :id_number, :race,
                        :current_rank, :current_headquarters, :landline_number, :cellphone_number, :fax_number, :email_address,
                        :experience1, :period1, :duration1,
                        :grand_total, :qualification_year, :disabled_person, :disability_details, :application_for_transfer,
                        :motivation_for_transfer_attached, :reason_for_transfer, :remarks, :reason_for_dq, 
                        :acting_experience, :managerial_experience, :applied_for_rcp, :applied_for_reg_mag, 
                        :applied_for_chief_mag, :applied_for_snr_je, :is_shortlisted)
                    ");
                    $result = $statement->execute(
                        array(
                            ':title' => $_POST["title"],
                            ':full_names' => $_POST["full_names"],
                            ':surname' => $_POST["surname"],
                            ':age' => $_POST["age"],
                            ':gender' => $_POST["gender"],
                            ':id_number' => $_POST["id_number"],
                            ':race' => $_POST["race"],
                            ':current_rank' => $_POST["current_rank"],
                            ':current_headquarters' => $_POST["current_headquarters"],
                            ':landline_number' => $_POST["landline_number"],
                            ':cellphone_number' => $_POST["cellphone_number"],
                            ':fax_number' => $_POST["fax_number"],
                            ':email_address' => $_POST["email_address"],
                            ':experience1' => $_POST["experience1"],
                            ':period1' => $_POST["period1"],
                            ':duration1' => $_POST["duration1"],
                            ':grand_total' => $_POST["grand_total"],
                            ':qualification_year' => $_POST["qualification_year"],
                            ':disabled_person' => $_POST["disabled_person"],
                            ':disability_details' => $_POST["disability_details"],
                            ':application_for_transfer' => $_POST["application_for_transfer"],
                            ':motivation_for_transfer_attached' => $_POST["motivation_for_transfer_attached"],
                            ':reason_for_transfer' => $_POST["reason_for_transfer"],
                            ':remarks' => $_POST["remarks"],
                            ':reason_for_dq' => $_POST["reason_for_dq"],
                            ':acting_experience' => $_POST["acting_experience"],
                            ':managerial_experience' => $_POST["managerial_experience"],
                            ':applied_for_rcp' => $_POST["applied_for_rcp"],
                            ':applied_for_reg_mag' => $_POST["applied_for_reg_mag"],
                            ':applied_for_chief_mag' => $_POST["applied_for_chief_mag"],
                            ':applied_for_snr_je' => $_POST["applied_for_snr_je"],
                            ':is_shortlisted' => $_POST["is_shortlisted"],
                            ':candidateid' => $_POST["id"]
                        )     
                    );
                echo 'DataShortlisted';
                } *//* else{
                    $statement = $connection->prepare(
                        "DELETE FROM tblshortlisted
                        WHERE candidateid = :id"
                        );
                    $result = $statement->execute(
                        array(
                            ':candidateid' => $_POST["id"]
                        )
                    ); 
                }      
                }*/

                echo 'Data Updated';
                //header("Refresh:0");
            } 
            /* header("Location: http://localhost/current_crud/index.php");
            exit(); */
        }

    /* Update tblshortlisted 
        if($_POST["action"] == "updateShort")
        {
            $statement = $connection->prepare(
            "UPDATE tblshortlisted
            SET candidateid = :candidateid,
            title = :title,
            full_names = :full_names,
            surname = :surname,
            age = :age,
            gender = :gender,
            id_number = :id_number,
            race = :race,
            current_rank = :current_rank,
            current_headquarters = :current_headquarters,
            landline_number = :landline_number, 
            cellphone_number = :cellphone_number,
            fax_number = :fax_number,
            email_address = :email_address,
            experience1 = :experience1,
            period1 = :period1,
            duration1 = :duration1,
            grand_total = :grand_total,
            qualification_year = :qualification_year,
            disabled_person = :disabled_person,
            disability_details = :disability_details,
            application_for_transfer = :application_for_transfer,
            motivation_for_transfer_attached = :motivation_for_transfer_attached,
            reason_for_transfer = :reason_for_transfer,
            remarks = :remarks,
            reason_for_dq = :reason_for_dq,
            acting_experience = :acting_experience,
            managerial_experience = :managerial_experience,
            applied_for_rcp = :applied_for_rcp,
            applied_for_reg_mag = :applied_for_reg_mag,
            applied_for_chief_mag = :applied_for_chief_mag, 
            applied_for_snr_je = :applied_for_snr_je,
            is_shortlisted = :is_shortlisted
            WHERE candidateid = :id
            "
            );
            $result = $statement->execute(
                array(                
                    ':candidateid' => $_POST["candidateid"],
                    ':title' => $_POST["title"],
                    ':full_names' => $_POST["full_names"],
                    ':surname' => $_POST["surname"],
                    ':age' => $_POST["age"],
                    ':gender' => $_POST["gender"],
                    ':id_number' => $_POST["id_number"],
                    ':race' => $_POST["race"],
                    ':current_rank' => $_POST["current_rank"],
                    ':current_headquarters' => $_POST["current_headquarters"],
                    ':landline_number' => $_POST["landline_number"],
                    ':cellphone_number' => $_POST["cellphone_number"],
                    ':fax_number' => $_POST["fax_number"],
                    ':email_address' => $_POST["email_address"],
                    ':experience1' => $_POST["experience1"],
                    ':period1' => $_POST["period1"],
                    ':duration1' => $_POST["duration1"],
                    ':grand_total' => $_POST["grand_total"],
                    ':qualification_year' => $_POST["qualification_year"],
                    ':disabled_person' => $_POST["disabled_person"],
                    ':disability_details' => $_POST["disability_details"],
                    ':application_for_transfer' => $_POST["application_for_transfer"],
                    ':motivation_for_transfer_attached' => $_POST["motivation_for_transfer_attached"],
                    ':reason_for_transfer' => $_POST["reason_for_transfer"],
                    ':remarks' => $_POST["remarks"],
                    ':reason_for_dq' => $_POST["reason_for_dq"],
                    ':acting_experience' => $_POST["acting_experience"],
                    ':managerial_experience' => $_POST["managerial_experience"],
                    ':applied_for_rcp' => $_POST["applied_for_rcp"],
                    ':applied_for_reg_mag' => $_POST["applied_for_reg_mag"],
                    ':applied_for_chief_mag' => $_POST["applied_for_chief_mag"],
                    ':applied_for_snr_je' => $_POST["applied_for_snr_je"],
                    ':is_shortlisted' => $_POST["is_shortlisted"],
                    ':candidateid' => $_POST["id"]
                )
            );
            /* if(!empty($result))
            {
                var_dump($_POST);
                if ($_POST["shortlist_status"] == "Yes") {
                /* IF YES, CREATE A NEW TABLE 
                $statement = $connection->prepare(
                    "INSERT INTO tblshortlisted (shorttest_id, first_name, surname , gender , dateofbirth , email_addr, home_addr , address2 , city , province , qualification, shortlist_status)  
                    VALUES (:shorttest_id, :first_name, :surname, 
                    :gender, :dateofbirth , :email_addr, 
                    :home_addr, :address2, :city, 
                    :province, :qualification, :shortlist_status)
                ");
                $result = $statement->execute(
                    array(
                        ':shorttest_id' => $_POST["id"],
                        ':first_name' => $_POST["first_name"],
                        ':surname' => $_POST["surname"],
                        ':gender' => $_POST["gender"],
                        ':dateofbirth' => $_POST["dateofbirth"],
                        ':email_addr' => $_POST["email_addr"],
                        ':home_addr' => $_POST["home_addr"],
                        ':address2' => $_POST["address2"],
                        ':city' => $_POST["city"],
                        ':province' => $_POST["province"],
                        ':qualification' => $_POST["qualification"],
                        ':shortlist_status' => $_POST["shortlist_status"]
                    )     
                );
                echo 'DataShortlisted';
                }else{
                    /* IF NO, REMOVE FROM TABLE 
                    $statement = $connection->prepare(
                        "DELETE FROM tbl_short
                        WHERE shorttest_id = :id"
                        );
                    $result = $statement->execute(
                        array(
                            ':id' => $_POST["id"]
                        )
                    );
                        
                }

                echo 'Data Updated';
            } 
        }*/

    /* Deleting from tblcandidates CRU(D) */
        if($_POST["action"] == "Delete"){
            $statement = $connection->prepare(
                "DELETE FROM tblcandidates WHERE candidateid = :candidateid"
            );
            $result = $statement->execute(
                array(
                    ':candidateid' => $_POST["id"]
                )
            );
            if(!empty($result))
            {
            echo 'Data Deleted';
            }
        }

    /* Deleting from tblshortlisted CRU(D) 
        if($_POST["action"] == "deleteShort"){
            $statement = $connection->prepare(
                "DELETE FROM tblshortlisted WHERE shortlisted_id  = :shortlisted_id "
            );
            $result = $statement->execute(
                array(
                    ':shortlisted_id ' => $_POST["id"]
                )
            );
            if(!empty($result))
            {
            echo 'Data Deleted';
            }
        } */

    /* Trying to Dynamically add rows for expertience */
        if ($_POST["action"] == "addExpRow") {
            $output='';
            $output .= '
                <div class="row"> <!-- Fifth Row (Experience 10) Try find PHP to duplicate this-->
                    <div class="col-md-4"> <!-- EXPERIENCE SECION 10-->
                        <label for="inputExperience10" class="form-label">Experience:</label>
                        <input type="text" class="form-control" name="inputExperience10" id="inputExperience10">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPeriod10" class="form-label">Period:</label>
                        <input type="text" class="form-control" name="inputPeriod10" id="inputPeriod10">
                    </div>
                    <div class="col-md-4">
                        <label for="inputDuration10" class="form-label">Duration:</label>
                        <input type="text" class="form-control" name="inputDuration10" id="inputDuration10">
                    </div> 
                </div>
                ';
                echo $output;
        }
    
    /*Export Table to CSV file */
        if ($_POST["action"] == "download_csv") {
            console.log("level unlocked");
            $stmt = $connection->prepare("Select * FROM `tblcandidates`");
            $stmt->execute();

            echo $stmt; 
                
            }
        }


