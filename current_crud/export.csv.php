<?php

    //Connect To Database
        $username = 'root';
        $password = '';
        $connection = new PDO( 'mysql:host=localhost;dbname=test', $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  /* Create Object of PDO class by connecting to Mysql database */

    // HTTP Headers - Download as CSV
        header ("Content-Type: text/csv; charset=utf-8");
        //header ("Content-Tranfer-Encoding: Binary");
        header ("Content-Dispostion: attachment; filename=export.csv");
       
        $output = fopen("php://output", "w");

        fputcsv($output, array('Candidate_Id', 'Title', 'Full_names', 'Surname', 'Age', 'Gender', 'ID Number',
        'Race','Current Rank','Current Headquarters','landline Number','Cellphone Number','Fax Number','e-mail Address',
        'Experience1','Period1','Duration1',
        'Grand Total','Qualification/Year','Disabled Person','Disability Details',
        'Application For Transfer','Motivation For Transfer Attached',
        'Reason For Transfer','Remarks','Reason for DQ',
        'Acting Experience','Managerial Experience',
        'Applied for Regional Court President',
        'rcp_gp_cities','rcp_wc_cities','rcp_kzn_cities',
        'rcp_ec_cities','rcp_mp_cities','rcp_fs_cities'  ,
        'rcp_lp_cities','rcp_nw_cities','rcp_np_cities',
        'Applied For Regional Magistrate',
        'rm_gp_cities','rm_wc_cities','rm_kzn_cities',
        'rm_ec_cities','rm_mp_cities','rm_fs_cities'  ,
        'rm_lp_cities','rm_nw_cities','rm_np_cities',
        'Applied For Chief Magistrate',
        'cm_gp_cities','cm_wc_cities','cm_kzn_cities',
        'cm_ec_cities','cm_mp_cities','cm_fs_cities',
        'cm_lp_cities','cm_nw_cities','cm_np_cities',
        'Applied For Senior Judicial Educator',
        'snr_je_gp_cities','snr_je_wc_cities','snr_je_kzn_cities',
        'snr_je_ec_cities','snr_je_mp_cities','snr_je_fs_cities',
        'snr_je_lp_cities','snr_je_nw_cities','snr_je_np_cities',
        'Is Candidate Shortlisted'

    ));

    //Get Users + direct output
        $stmt = $connection->prepare("Select * FROM `tblcandidates`");
        $stmt->execute();

        
    //Add coulums and format
        while ($row = $stmt->Fetch(PDO::FETCH_NAMED)) {
            //ROW DATA (CSV Columns are separated with a comma)
            
                fputcsv($output, $row);  
            
            /* echo implode (",", [
            $row['candidateid'],
            $row['title'],
            $row['full_names'],
            $row['surname'],
            $row['age'],
            $row['gender'],
            $row['id_number'],
            $row['race'],
            $row['current_rank'],
            $row['current_headquarters'],
            $row['landline_number'],
            $row['cellphone_number'],
            $row['fax_number'],
            $row['email_address'],
            $row['experience1'],
            $row['period1'],
            $row['duration1'],
            $row['grand_total'],
            $row['qualification_year'],
            $row['disabled_person'],
            $row['disability_details'],
            $row['application_for_transfer'],
            $row['motivation_for_transfer_attached'],
            $row['reason_for_transfer'],
            $row['remarks'],
            $row['reason_for_dq'],
            $row['acting_experience'],
            $row['managerial_experience'],
            $row['applied_for_rcp'],
            $row['rcp_gp_cities'],
            $row['rcp_wc_cities'],
            $row['rcp_kzn_cities'],
            $row["rcp_ec_cities"],
            $row["rcp_mp_cities"],
            $row["rcp_fs_cities"],
            $row["rcp_lp_cities"],
            $row["rcp_nw_cities"],
            $row["rcp_np_cities"],
            $row["applied_for_reg_mag"],
            $row["rm_gp_cities"],
            $row["rm_wc_cities"],
            $row["rm_kzn_cities"],
            $row["rm_ec_cities"],
            $row["rm_mp_cities"],
            $row["rm_fs_cities"],
            $row["rm_lp_cities"],
            $row["rm_nw_cities"],
            $row["rm_np_cities"],
            $row["applied_for_chief_mag"],
            $row["cm_gp_cities"],
            $row["cm_wc_cities"],
            $row["cm_kzn_cities"],
            $row["cm_ec_cities"],
            $row["cm_mp_cities"],
            $row["cm_fs_cities"],
            $row["cm_lp_cities"],
            $row["cm_nw_cities"],
            $row["cm_np_cities"],
            $row["applied_for_snr_je"],
            $row["snr_je_gp_cities"],
            $row["snr_je_wc_cities"],
            $row["snr_je_kzn_cities"],
            $row["snr_je_ec_cities"],
            $row["snr_je_mp_cities"],
            $row["snr_je_fs_cities"],
            $row["snr_je_lp_cities"],
            $row["snr_je_nw_cities"],
            $row["snr_je_np_cities"],       
            $row['is_shortlisted']
            ]);  */
            //NEXT ROW
            //echo "\r\n";
        }

        fclose($output); 



       /*  require "vendor/autoload.php";
        use PhpOffice\PhpSpreadsheet\Spreadsheet;
        use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

        //CreateSpreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        //FETCH USers + Write to spreadsheet
        $stmt = $connection->prepare("Select * FROM `tblcandidates`");
        $stmt->execute();
        $i = 1;

        while ($row = $stmt->Fetch()) {
            //ROW DATA (CSV Columns are separated with a comma)
                
                $sheet->setCellValue("A".$i, $row['candidateid']);
                $sheet->setCellValue("B".$i, $row['title']);
                $sheet->setCellValue("C".$i, $row['full_names']);
                $sheet->setCellValue("D".$i, $row['surname']);
                $sheet->setCellValue("E".$i, $row['age']);
                $sheet->setCellValue("F".$i, $row['gender']);
                $sheet->setCellValue("G".$i, $row['id_number']);
                $sheet->setCellValue("H".$i, $row['race']);
                $sheet->setCellValue("I".$i, $row['current_rank']);
                $sheet->setCellValue("J".$i, $row['current_headquarters']);
                $sheet->setCellValue("K".$i, $row['landline_number']);
                $sheet->setCellValue("L".$i, $row['cellphone_number']);
                $sheet->setCellValue("M".$i, $row['fax_number']);
                $sheet->setCellValue("N".$i, $row['email_address']);
                $sheet->setCellValue("O".$i, $row['experience1']);
                $sheet->setCellValue("P".$i, $row['period1']);
                $sheet->setCellValue("Q".$i, $row['duration1']);
                $sheet->setCellValue("R".$i, $row['grand_total']);
                $sheet->setCellValue("S".$i, $row['qualification_year']);
                $sheet->setCellValue("T".$i, $row['disabled_person']);
                $sheet->setCellValue("U".$i, $row['disability_details']);
                $sheet->setCellValue("V".$i, $row['application_for_transfer']);
                $sheet->setCellValue("W".$i, $row['motivation_for_transfer_attached']);
                $sheet->setCellValue("X".$i, $row['reason_for_transfer']);
                $sheet->setCellValue("Y".$i, $row['remarks']);
                $sheet->setCellValue("Z".$i, $row['reason_for_dq']);
                $sheet->setCellValue("AA".$i, $row['acting_experience']);
                $sheet->setCellValue("AB".$i, $row['managerial_experience']);
                $sheet->setCellValue("AC".$i, $row['applied_for_rcp']);
                $sheet->setCellValue("AD".$i, $row['rcp_gp_cities']);
                $sheet->setCellValue("AE".$i, $row['rcp_wc_cities']);
                $sheet->setCellValue("AF".$i, $row['rcp_kzn_cities']);
                $sheet->setCellValue("AG".$i, $row['rcp_ec_cities']);
                $sheet->setCellValue("AH".$i, $row['rcp_mp_cities']);
                $sheet->setCellValue("AI".$i, $row['rcp_fs_cities']);
                $sheet->setCellValue("AJ".$i, $row['rcp_lp_cities']);
                $sheet->setCellValue("AK".$i, $row['rcp_nw_cities']);
                $sheet->setCellValue("AL".$i, $row['rcp_np_cities']);
                $sheet->setCellValue("AM".$i, $row['applied_for_reg_mag']);
                $sheet->setCellValue("AN".$i, $row['rm_gp_cities']);
                $sheet->setCellValue("AO".$i, $row['rm_wc_cities']);
                $sheet->setCellValue("AP".$i, $row['rm_kzn_cities']);
                $sheet->setCellValue("AQ".$i, $row['rm_ec_cities']);
                $sheet->setCellValue("AR".$i, $row['rm_mp_cities']);
                $sheet->setCellValue("AS".$i, $row['rm_fs_cities']);
                $sheet->setCellValue("AT".$i, $row['rm_lp_cities']);
                $sheet->setCellValue("AU".$i, $row['rm_nw_cities']);
                $sheet->setCellValue("AV".$i, $row['rm_np_cities']);
                $sheet->setCellValue("AW".$i, $row['applied_for_chief_mag']);
                $sheet->setCellValue("AX".$i, $row['cm_gp_cities']);
                $sheet->setCellValue("AY".$i, $row['cm_wc_cities']);
                $sheet->setCellValue("AZ".$i, $row['cm_kzn_cities']);
                $sheet->setCellValue("BA".$i, $row['cm_ec_cities']);
                $sheet->setCellValue("BB".$i, $row['cm_mp_cities']);
                $sheet->setCellValue("BC".$i, $row['cm_fs_cities']);
                $sheet->setCellValue("BD".$i, $row['cm_lp_cities']);
                $sheet->setCellValue("BE".$i, $row['cm_nw_cities']);
                $sheet->setCellValue("BF".$i, $row['cm_np_cities']);
                $sheet->setCellValue("BG".$i, $row['applied_for_snr_je']);
                $sheet->setCellValue("BH".$i, $row['snr_je_gp_cities']);
                $sheet->setCellValue("BI".$i, $row['snr_je_wc_cities']);
                $sheet->setCellValue("BJ".$i, $row['snr_je_kzn_cities']);
                $sheet->setCellValue("BK".$i, $row['snr_je_ec_cities']);
                $sheet->setCellValue("BL".$i, $row['snr_je_mp_cities']);
                $sheet->setCellValue("BM".$i, $row['snr_je_fs_cities']);
                $sheet->setCellValue("BN".$i, $row['snr_je_lp_cities']);
                $sheet->setCellValue("BO".$i, $row['snr_je_nw_cities']);
                $sheet->setCellValue("BP".$i, $row['snr_je_np_cities']);
                $sheet->setCellValue("BQ".$i, $row['is_shortlisted']);
                $i++;
            }
            //SAVE EXCEL File
                $writer = new Xlsx($spreadsheet);
                $writer->save("demo.xlsx");
                echo "Ok!"; */

?>