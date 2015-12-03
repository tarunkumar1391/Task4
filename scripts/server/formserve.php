<!DOCTYPE html>
<html>
<body>
<?php
/**
 * Hiwi: Task 3.
 * User: tarun
 *
 */
// DB credentials
$servername = "localhost";
$username = "root";
$password = "tarun1391";
$dbname = "clusterform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Prepared statement : Total of 28 input form elements  + 1 field in database for tu id

$stmt = $conn->prepare("INSERT INTO formgen (proj_title,prop_inst,prop_state,prop_new_state,dir_title,dir_lname,dir_fname,dir_street,dir_pcode,dir_city,dir_phone,dir_fax,
                                pi_title,pi_lname,pi_fname,pi_street,pi_pcode,pi_city,pi_phone,pi_fax,pm_title,pm_lname,pm_fname,pm_street,pm_pcode,pm_city,pm_phone,pm_fax,pm_email,
                                pm_gender,pm_nat,pm_tuid,pm_lichtacc,res1_title,res1_lname,res1_fname,res1_phone,res1_email,res1_gender,res1_nat,res1_tuid,res1_lichtacc,res2_title,
                                res2_lname,res2_fname,res2_phone,res2_email,res2_gender,res2_nat,res2_tuid,res2_lichtacc,more_res_info,pp_title,pp_inst,pp_lname,pp_fname,pp_street,
                                pp_pcode,pp_city,pp_email,pp_phone,pp_tuid,pp_tu_id,pp_lichtacc,more_pp_info,research_area,research_area_new,proj_enddate,proj_hours,abstract,proj_class,
                                 cpu_time,acce_nvidia,acce_xeonphi,mem_pc,home_dir,work_proj,work_scratch,req_maxcores,req_cputime,req_mmpc,req_dspace,proglang,proglang_other,progmodels,progmodel_other,tools,
                                 tools_other,lib,spl_req,agree1,agree2,agree3,agree4,agree5,agree6,agreefinal,timestmp)
                            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,
                            ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


if($_SERVER['REQUEST_METHOD'] == "POST") {


    //1.Administrative Details
    $proj_title = isset($_POST['proj_title']) ? $_POST['proj_title'] : "0";


    $prop_inst = isset($_POST['prop_inst']) ? $_POST['prop_inst'] : "0";



    $prop_state = isset($_POST['prop_state']) ? $_POST['prop_state'] : "0";



    $prop_new_state = isset($_POST['prop_new_state']) ? $_POST['prop_new_state'] : "0";



    //Director of the institution
    $dir_title = isset($_POST['dir_title']) ? $_POST['dir_title'] : "0";



    $dir_lname = isset($_POST['dir_lname']) ? $_POST['dir_lname'] : "0";



    $dir_fname = isset($_POST['dir_fname']) ? $_POST['dir_fname'] : "0";



    $dir_street = isset($_POST['dir_street']) ? $_POST['dir_street'] : "0";



    $dir_pcode = isset($_POST['dir_pcode']) ? $_POST['dir_pcode'] : "0";



    $dir_city = isset($_POST['dir_city']) ? $_POST['dir_city'] : "0";



    $dir_phone = isset($_POST['dir_phone']) ? $_POST['dir_phone'] : "0";



    $dir_fax = isset($_POST['dir_fax']) ? $_POST['dir_fax'] : "0";



    //Principal Investigator
    $pi_title = isset($_POST['pi_title']) ? $_POST['pi_title'] : "0";



    $pi_lname = isset($_POST['pi_lname']) ? $_POST['pi_lname'] : "0";



    $pi_fname = isset($_POST['pi_fname']) ? $_POST['pi_fname'] : "0";



    $pi_street = isset($_POST['pi_street']) ? $_POST['pi_street'] : "0";



    $pi_pcode = isset($_POST['pi_pcode']) ? $_POST['pi_pcode'] : "0";



    $pi_city = isset($_POST['pi_city']) ? $_POST['pi_city'] : "0";



    $pi_phone = isset($_POST['pi_phone']) ? $_POST['pi_phone'] : "0";



    $pi_fax = isset($_POST['pi_fax']) ? $_POST['pi_fax'] : "0";



    //Project Manager
    $pm_title = isset($_POST['pm_title']) ? $_POST['pm_title'] : "0";



    $pm_lname = isset($_POST['pm_lname']) ? $_POST['pm_lname'] : "0";



    $pm_fname = isset($_POST['pm_fname']) ? $_POST['pm_fname'] : "0";



    $pm_street = isset($_POST['pm_street']) ? $_POST['pm_street'] : "0";


    $pm_pcode = isset($_POST['pm_pcode']) ? $_POST['pm_pcode'] : "0";



    $pm_city = isset($_POST['pm_city']) ? $_POST['pm_city'] : "0";



    $pm_phone = isset($_POST['pm_phone']) ? $_POST['pm_phone'] : "0";



    $pm_fax = isset($_POST['pm_fax']) ? $_POST['pm_fax'] : "0";



    $pm_email = isset($_POST['pm_email']) ? $_POST['pm_email'] : "0";



    $pm_gender = isset($_POST['pm_gender']) ? $_POST['pm_gender'] : "0";



    $pm_nat = isset($_POST['pm_nat']) ? $_POST['pm_nat'] : "0";



    $pm_tuid = isset($_POST['pm_tuid']) ? $_POST['pm_tuid'] : "0";



    $pm_lichtacc = isset($_POST['pm_lichtacc']) ? $_POST['pm_lichtacc'] : "0";



    //Researcher- person 1

    $res1_title = isset($_POST['res1_title']) ? $_POST['res1_title'] : "0";



    $res1_lname = isset($_POST['res1_lname']) ? $_POST['res1_lname'] : "0";



    $res1_fname = isset($_POST['res1_fname']) ? $_POST['res1_fname'] : "0";



    $res1_phone = isset($_POST['res1_phone']) ? $_POST['res1_phone'] : "0";



    $res1_email = isset($_POST['res1_email']) ? $_POST['res1_email'] : "0";


    $res1_gender = isset($_POST['res1_gender']) ? $_POST['res1_gender'] : "0";



    $res1_nat = isset($_POST['res1_nat']) ? $_POST['res1_nat'] : "0";



    $res1_tuid = isset($_POST['res1_tuid']) ? $_POST['res1_tuid'] : "0";



    $res1_lichtacc = isset($_POST['res1_lichtacc']) ? $_POST['res1_lichtacc'] : "0";



    //Researcher- person 2

    $res2_title = isset($_POST['res2_title']) ? $_POST['res2_title'] : "0";



    $res2_lname = isset($_POST['res2_lname']) ? $_POST['res2_lname'] : "0";



    $res2_fname = isset($_POST['res2_fname']) ? $_POST['res2_fname'] : "0";



    $res2_phone = isset($_POST['res2_phone']) ? $_POST['res2_phone'] : "0";



    $res2_email = isset($_POST['res2_email']) ? $_POST['res2_email'] : "0";



    $res2_gender = isset($_POST['res2_gender']) ? $_POST['res2_gender'] : "0";



    $res2_nat = isset($_POST['res2_nat']) ? $_POST['res2_nat'] : "0";



    $res2_tuid = isset($_POST['res2_tuid']) ? $_POST['res2_tuid'] : "0";



    $res2_lichtacc = isset($_POST['res2_lichtacc']) ? $_POST['res2_lichtacc'] : "0";



    //mmore researchers info
    $more_res_info = isset($_POST['more_res_info']) ? $_POST['more_res_info'] : "0";



    //Project partners

    $pp_title = isset($_POST['pp_title']) ? $_POST['pp_title'] : "0";



    $pp_inst = isset($_POST['pp_inst']) ? $_POST['pp_inst'] : "0";



    $pp_lname = isset($_POST['pp_lname']) ? $_POST['pp_lname'] : "0";



    $pp_fname = isset($_POST['pp_fname']) ? $_POST['pp_fname'] : "0";



    $pp_street = isset($_POST['pp_street']) ? $_POST['pp_street'] : "0";



    $pp_pcode = isset($_POST['pp_pcode']) ? $_POST['pp_pcode'] : "0";



    $pp_city = isset($_POST['pp_city']) ? $_POST['pp_city'] : "0";



    $pp_email = isset($_POST['pp_email']) ? $_POST['pp_email'] : "0";



    $pp_phone = isset($_POST['pp_phone']) ? $_POST['pp_phone'] : "0";



    $pp_tuid = isset($_POST['pp_tuid']) ? $_POST['pp_tuid'] : "NA";



    $pp_tu_id = isset($_POST['pp_tu_id']) ? $_POST['pp_tu_id'] : "NA";



    $pp_lichtacc = isset($_POST['pp_lichtacc']) ? $_POST['pp_lichtacc'] : "0";



    //more project partners info

    $more_pp_info = isset($_POST['more_pp_info']) ? $_POST['more_pp_info'] : "0";



    //project details

    $research_area = isset($_POST['research_area']) ? $_POST['research_area'] : "0";



    $research_area_new = isset($_POST['research_area_new']) ? $_POST['research_area_new'] : "NA";



    $proj_enddate = isset($_POST['proj_enddate']) ? $_POST['proj_enddate'] : "0";



    $proj_hours = isset($_POST['proj_hours']) ? $_POST['proj_hours'] : "0";



    //Abstract
    $abstract = isset($_POST['abstract']) ? $_POST['abstract'] : "0";



    //Technical Description- project class

    $proj_class = isset($_POST['proj_class']) ? $_POST['proj_class'] : "0";



    //Detailed resource requirements

    $cpu_time = isset($_POST['cpu_time']) ? $_POST['cpu_time'] : "0";



    $acce_nvidia = isset($_POST['acce_nvidia']) ? $_POST['acce_nvidia'] : "0";



    $acce_xeonphi = isset($_POST['acce_xeonphi']) ? $_POST['acce_xeonphi'] : "0";



    $mem_pc = isset($_POST['mem_pc']) ? $_POST['mem_pc'] : "0";



    $home_dir = isset($_POST['home_dir']) ? $_POST['home_dir'] : "0";



    $work_proj = isset($_POST['work_proj']) ? $_POST['work_proj'] : "0";



    $work_scratch = isset($_POST['work_scratch']) ? $_POST['work_scratch'] : "0";



    //resource requirements for a typical batch run

    $req_maxcores = isset($_POST['req_maxcores']) ? $_POST['req_maxcores'] : "0";



    $req_cputime = isset($_POST['req_cputime']) ? $_POST['req_cputime'] : "0";



    $req_mmpc = isset($_POST['req_mmpc']) ? $_POST['req_mmpc'] : "0";



    $req_dspace = isset($_POST['req_dspace']) ? $_POST['req_dspace'] : "0";



    //Programming languages
    $proglang = 'No language selected';
    if (isset($_POST['prog_lang'])){
        $proglang = implode(',', $_POST['prog_lang']);
    }

    $proglang_other = isset($_POST['proglang_other']) ? $_POST['proglang_other'] : "0";



    //programming models
    $progmodels ='No model selected';
    if (isset($_POST['prog_models'])){
        $progmodels = implode(',', $_POST['prog_models']);
    }

    $progmodel_other = isset($_POST['progmodel_other']) ? $_POST['progmodel_other'] : "0";



    //tools
    $tools = 'No tools selected';
    if (isset($_POST['tools'])){
        $tools = implode(',', $_POST['tools']);
    }
    $tools_other = isset($_POST['tools_other']) ? $_POST['tools_other'] : "0";



    //libraries
//    if(!empty($_POST['libraries'])) {
//        foreach($_POST['libraries'] as $lib );
//    }
    $lib = 'No libraries selected';
    if (isset($_POST['libraries'])){
        $lib = implode(',', $_POST['libraries']);
    }
    //special requirements

    $spl_req = isset($_POST['spl_req']) ? $_POST['spl_req'] : "0";



    //final agreements

    $agree1 = (isset($_POST['agree1']) && $_POST['agree1']) ? "1" : "0";



    $agree2 = (isset($_POST['agree2']) && $_POST['agree2']) ? "1" : "0";



    $agree3 = (isset($_POST['agree3']) && $_POST['agree3']) ? "1" : "0";



    $agree4 = (isset($_POST['agree4']) && $_POST['agree4']) ? "1" : "0";



    $agree5 = (isset($_POST['agree5']) && $_POST['agree5']) ? "1" : "0";



    $agree6 = (isset($_POST['agree6']) && $_POST['agree6']) ? "1" : "0";





    $agreefinal = (isset($_POST['agreefinal']) && $_POST['agreefinal']) ? "1" : "0";


    $timestmp = date("Y-m-d H:i:s");



//Generate Error if prepare fails
    if (!$stmt) {
        echo "Prepare failed:" . $mysqli->error;
    }
//Binding all 97 parameters
    if (!$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", $proj_title, $prop_inst, $prop_state, $prop_new_state, $dir_title, $dir_lname, $dir_fname, $dir_street, $dir_pcode, $dir_city, $dir_phone, $dir_fax,
        $pi_title, $pi_lname, $pi_fname, $pi_street, $pi_pcode, $pi_city, $pi_phone, $pi_fax, $pm_title, $pm_lname, $pm_fname, $pm_street, $pm_pcode, $pm_city, $pm_phone, $pm_fax, $pm_email,
        $pm_gender, $pm_nat, $pm_tuid, $pm_lichtacc, $res1_title, $res1_lname, $res1_fname, $res1_phone, $res1_email, $res1_gender, $res1_nat, $res1_tuid, $res1_lichtacc, $res2_title,
        $res2_lname, $res2_fname, $res2_phone, $res2_email, $res2_gender, $res2_nat, $res2_tuid, $res2_lichtacc, $more_res_info, $pp_title, $pp_inst, $pp_lname, $pp_fname, $pp_street,
        $pp_pcode, $pp_city, $pp_email, $pp_phone, $pp_tuid, $pp_tu_id, $pp_lichtacc, $more_pp_info, $research_area, $research_area_new, $proj_enddate, $proj_hours, $abstract, $proj_class,
        $cpu_time, $acce_nvidia, $acce_xeonphi, $mem_pc, $home_dir, $work_proj, $work_scratch, $req_maxcores, $req_cputime, $req_mmpc, $req_dspace, $proglang, $proglang_other, $progmodels,
        $progmodel_other, $tools, $tools_other, $lib, $spl_req, $agree1, $agree2, $agree3, $agree4, $agree5, $agree6, $agreefinal,$timestmp)
    ) {
        echo "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
    }
//Generate Error if statement execution fails
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ")" . $stmt->error;
    }
    $projnr = $stmt->insert_id ;
    echo "new records created successfully and has an id .\n". $projnr ;

   //content writing onto text files

    $path = '/home/tarun/Documents/HIWI/Task4/scripts/data';
    $lattemp = '/home/tarun/Documents/HIWI/Task4/scripts/data/latextemp';
    $tempfolder = tempnam($path, time().'-');
    if( file_exists($tempfolder)){
        unlink($tempfolder);
    }
    mkdir($tempfolder,0777,true);//generates a dir with a random name

    file_put_contents($tempfolder ."/proj_title.txt",$proj_title,FILE_APPEND); //file is created inside the random dir with the name specified by admin
    file_put_contents($tempfolder ."/prop_inst.txt",$prop_inst,FILE_APPEND);
    if($prop_state === 'Other'){
        file_put_contents($tempfolder ."/prop_state.txt",$prop_new_state,FILE_APPEND);
    }else{
        file_put_contents($tempfolder ."/prop_state.txt",$prop_state,FILE_APPEND);
    }
    file_put_contents($tempfolder ."/dir_title.txt",$dir_title,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_lname.txt",$dir_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_fname.txt",$dir_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_street.txt",$dir_street,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_pcode.txt",$dir_pcode,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_city.txt",$dir_city,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_phone.txt",$dir_phone,FILE_APPEND);
    file_put_contents($tempfolder ."/dir_fax.txt",$dir_fax,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_tite.txt",$pi_title,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_lname.txt",$pi_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_fname.txt",$pi_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_street.txt",$pi_street,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_pcode.txt",$pi_pcode,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_city.txt",$pi_city,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_phone.txt",$pi_phone,FILE_APPEND);
    file_put_contents($tempfolder ."/pi_fax.txt",$pi_fax,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_title.txt",$pm_title,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_lname.txt",$pm_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_fname.txt",$pm_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_street.txt",$pm_street,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_pcode.txt",$pm_pcode,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_city.txt",$pm_city,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_phone.txt",$pm_phone,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_fax.txt",$pm_fax,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_email.txt",$pm_email,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_gender.txt",$pm_gender,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_nat.txt",$pm_nat,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_tuid.txt",$pm_tuid,FILE_APPEND);
    file_put_contents($tempfolder ."/pm_lichtacc.txt",$pm_lichtacc,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_title.txt",$res1_title,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_lname.txt",$res1_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_fname.txt",$res1_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_phone.txt",$res1_phone,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_email.txt",$res1_email,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_gender.txt",$res1_gender,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_nat.txt",$res1_nat,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_tuid.txt",$res1_tuid,FILE_APPEND);
    file_put_contents($tempfolder ."/res1_lichtacc.txt",$res1_lichtacc,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_title.txt",$res2_title,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_lname.txt",$res2_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_fname.txt",$res2_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_phone.txt",$res2_phone,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_email.txt",$res2_email,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_gender.txt",$res2_gender,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_nat.txt",$res2_nat,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_tuid.txt",$res2_tuid,FILE_APPEND);
    file_put_contents($tempfolder ."/res2_lichtacc.txt",$res2_lichtacc,FILE_APPEND);
    file_put_contents($tempfolder ."/more_res_info.txt",$more_res_info,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_title.txt",$pp_title,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_inst.txt",$pp_inst,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_lname.txt",$pp_lname,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_fname.txt",$pp_fname,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_street.txt",$pp_street,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_pcode.txt",$pp_pcode,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_city.txt",$pp_city,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_email.txt",$pp_email,FILE_APPEND);
    file_put_contents($tempfolder ."/pp_phone.txt",$pp_phone,FILE_APPEND);
    if($pp_tuid === 'yes'){
        file_put_contents($tempfolder ."/pp_tuid.txt",$pp_tu_id,FILE_APPEND);
    }else {
        file_put_contents($tempfolder ."/pp_tuid.txt",$pp_tuid,FILE_APPEND);
    }

    file_put_contents($tempfolder ."/pp_lichtacc.txt",$pp_lichtacc,FILE_APPEND);
    file_put_contents($tempfolder ."/more_pp_info.txt",$more_pp_info,FILE_APPEND);
    if($research_area === 'Other'){
        file_put_contents($tempfolder ."/research_area.txt",$research_area_new,FILE_APPEND);
    }else{
        file_put_contents($tempfolder ."/research_area.txt",$research_area,FILE_APPEND);
    }
    file_put_contents($tempfolder ."/proj_enddate.txt",$proj_enddate,FILE_APPEND);
    file_put_contents($tempfolder ."/proj_hours.txt",$proj_hours,FILE_APPEND);
    file_put_contents($tempfolder ."/abstract.txt",$abstract,FILE_APPEND);
    file_put_contents($tempfolder ."/proj_class.txt",$proj_class,FILE_APPEND);
    file_put_contents($tempfolder ."/cpu_time.txt",$cpu_time,FILE_APPEND);
    file_put_contents($tempfolder ."/acce_nvidia.txt",$acce_nvidia,FILE_APPEND);
    file_put_contents($tempfolder ."/acce_xeonphi.txt",$acce_xeonphi,FILE_APPEND);
    file_put_contents($tempfolder ."/mem_pc.txt",$mem_pc,FILE_APPEND);
    file_put_contents($tempfolder ."/home_dir.txt",$home_dir,FILE_APPEND);
    file_put_contents($tempfolder ."/work_proj.txt",$work_proj,FILE_APPEND);
    file_put_contents($tempfolder ."/work_scratch.txt",$work_scratch,FILE_APPEND);
    file_put_contents($tempfolder ."/req_maxcores.txt",$req_maxcores,FILE_APPEND);
    file_put_contents($tempfolder ."/req_cputime.txt",$req_cputime,FILE_APPEND);
    file_put_contents($tempfolder ."/req_mmpc.txt",$req_mmpc,FILE_APPEND);
    file_put_contents($tempfolder ."/req_dspace.txt",$req_dspace,FILE_APPEND);
    if($proglang === 'No language selected'){
        file_put_contents($tempfolder ."/proglang.txt",$proglang_other,FILE_APPEND);
    }else{
        file_put_contents($tempfolder ."/proglang.txt",$proglang,FILE_APPEND);
    }
    if($progmodels === 'No model selected'){
        file_put_contents($tempfolder ."/progmodels.txt",$progmodel_other,FILE_APPEND);
    }else{
        file_put_contents($tempfolder ."/progmodels.txt",$progmodels,FILE_APPEND);
    }
    if($tools === 'No tools selected'){
        file_put_contents($tempfolder ."/tools.txt",$tools_other,FILE_APPEND);
    }else{
        file_put_contents($tempfolder ."/tools.txt",$tools,FILE_APPEND);
    }

    file_put_contents($tempfolder ."/libraries.txt",$lib,FILE_APPEND);

    file_put_contents($tempfolder ."/spl_req.txt",$spl_req,FILE_APPEND);
    if($agree1 ==='1'){
        $agree1_new ="\CheckBox[name=agree1,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree1.txt",$agree1_new,FILE_APPEND);
    }else{
        $agree1_new = "\CheckBox[name=agree1,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree1.txt",$agree1_new,FILE_APPEND);
    }
    if($agree2 ==='1'){
        $agree2_new ="\CheckBox[name=agree2,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree2.txt",$agree2_new,FILE_APPEND);
    }else{
        $agree2_new = "\CheckBox[name=agree2,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree2.txt",$agree2_new,FILE_APPEND);
    }
    if($agree3 ==='1'){
        $agree3_new ="\CheckBox[name=agree3,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree3.txt",$agree3_new,FILE_APPEND);
    }else{
        $agree3_new = "\CheckBox[name=agree3,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree3.txt",$agree3_new,FILE_APPEND);
    }
    if($agree4 ==='1'){
        $agree4_new ="\CheckBox[name=agree4,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree4.txt",$agree4_new,FILE_APPEND);
    }else{
        $agree4_new = "\CheckBox[name=agree4,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree4.txt",$agree4_new,FILE_APPEND);
    }
    if($agree5 ==='1'){
        $agree5_new ="\CheckBox[name=agree5,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree5.txt",$agree5_new,FILE_APPEND);
    }else{
        $agree5_new = "\CheckBox[name=agree5,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree5.txt",$agree5_new,FILE_APPEND);
    }
    if($agree6 ==='1'){
        $agree6_new ="\CheckBox[name=agree6,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agree6.txt",$agree6_new,FILE_APPEND);
    }else{
        $agree6_new = "\CheckBox[name=agree6,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agree6.txt",$agree6_new,FILE_APPEND);
    }
    if($agreefinal ==='1'){
        $agreefinal_new ="\CheckBox[name=agreefinal,charsize=12pt,checked]{}";
        file_put_contents($tempfolder ."/agreefinal.txt",$agreefinal_new,FILE_APPEND);
    }else{
        $agreefinal_new = "\CheckBox[name=agreefinal,charsize=12pt]{}";
        file_put_contents($tempfolder ."/agreefinal.txt",$agreefinal_new,FILE_APPEND);
    }
    file_put_contents($tempfolder ."/projnr.txt",$projnr,FILE_APPEND);
    file_put_contents($tempfolder ."/timestamp.txt",$timestmp,FILE_APPEND);
    //shell commands : copies the main.tex to the unique dir
    shell_exec( 'cp "' . $lattemp . '/"* "' . $tempfolder . '"' );
//shell commands : control enters into the unique dir and executes the pdflatex command also renames the template.pdf to your_application_'$projnr'.pdf
    shell_exec('cd "' . $tempfolder . '"; pdflatex --interaction=nonstopmode template; mv template.pdf your_application_'.$projnr.'.pdf');


}


$stmt->close();
$conn->close();


?>
</body>
</html>