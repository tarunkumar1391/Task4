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
$password = "";
$dbname = "clusterform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Prepared statement : Total of 28 input form elements  + 1 field in database for tu id

$stmt = $conn->prepare("INSERT INTO formgen (proj_title,prop_inst,dir_title,dir_lname,dir_fname,dir_street,dir_pcode,dir_city,dir_phone,dir_fax)
                            VALUES (?,?,?,?,?,?,?,?,?,?)");


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $path = '/home/tarun/Documents/HIWI/Task3/data';
    $lattemp = '/home/tarun/Documents/HIWI/Task3/data/latextemp';
    $tempfolder = tempnam($path, time().'-');
    if( file_exists($tempfolder)){
        unlink($tempfolder);
    }
    mkdir($tempfolder,0777,true);//generates a dir with a random name

    //1.Administrative Details
    $proj_title = isset($_POST['proj_title']) ? $_POST['proj_title'] : "0";
    echo "<p>The  title is $proj_title</p>";
    file_put_contents($tempfolder ."/proj_title.txt",$proj_title,FILE_APPEND); //file is created inside the random dir with the name specified by admin

    $prop_inst = isset($_POST['prop_inst']) ? $_POST['prop_inst'] : "0";
    echo "<p>The proposing institution is $prop_inst</p>";
    file_put_contents($tempfolder ."/prop_inst.txt",$prop_inst,FILE_APPEND);

    //code for proposing state yet to come (2 input fields, one from dropdown and one to specify if the state wasn't present in the list

    //Director of the institution
    $dir_title = isset($_POST['dir_title']) ? $_POST['dir_title'] : "0";
    echo "<p>The title is $dir_title </p>";
    file_put_contents($tempfolder ."/dir_title.txt",$dir_title,FILE_APPEND);

    $dir_lname = isset($_POST['dir_lname']) ? $_POST['dir_lname'] : "0";
    echo "<p>The lastname is $dir_lname </p>";
    file_put_contents($tempfolder ."/dir_lname.txt",$dir_lname,FILE_APPEND);

    $dir_fname = isset($_POST['dir_fname']) ? $_POST['dir_fname'] : "0";
    echo "<p>The firstname is $dir_fname </p>";
    file_put_contents($tempfolder ."/dir_fname.txt",$dir_fname,FILE_APPEND);

    $dir_street = isset($_POST['dir_street']) ? $_POST['dir_street'] : "0";
    echo "<p>The street is $dir_street </p>";
    file_put_contents($tempfolder ."/dir_street.txt",$dir_street,FILE_APPEND);

    $dir_pcode = isset($_POST['dir_pcode']) ? $_POST['dir_pcode'] : "0";
    echo "<p>The pin code is $dir_pcode </p>";
    file_put_contents($tempfolder ."/dir_pcode.txt",$dir_pcode,FILE_APPEND);

    $dir_city = isset($_POST['dir_city']) ? $_POST['dir_city'] : "0";
    echo "<p>The city is $dir_city </p>";
    file_put_contents($tempfolder ."/dir_city.txt",$dir_city,FILE_APPEND);

    $dir_phone = isset($_POST['dir_phone']) ? $_POST['dir_phone'] : "0";
    echo "<p>The phone num is is $dir_phone </p>";
    file_put_contents($tempfolder ."/dir_phone.txt",$dir_phone,FILE_APPEND);

    $dir_fax = isset($_POST['dir_fax']) ? $_POST['dir_fax'] : "0";
    echo "<p>The fax num is  is    $dir_fax </p>";
    file_put_contents($tempfolder ."/dir_fax.txt",$dir_fax,FILE_APPEND);

    //Principal Investigator
    $pi_title = isset($_POST['pi_title']) ? $_POST['pi_title'] : "0";
    echo "<p>The title is $pi_title </p>";
    file_put_contents($tempfolder ."/pi_title.txt",$pi_title,FILE_APPEND);

    $pi_lname = isset($_POST['pi_lname']) ? $_POST['pi_lname'] : "0";
    echo "<p>The title is $pi_lname </p>";
    file_put_contents($tempfolder ."/pi_lname.txt",$pi_lname,FILE_APPEND);

    $pi_fname = isset($_POST['pi_fname']) ? $_POST['pi_fname'] : "0";
    echo "<p>The title is $pi_fname </p>";
    file_put_contents($tempfolder ."/pi_fname.txt",$pi_fname,FILE_APPEND);

    $pi_street = isset($_POST['pi_street']) ? $_POST['pi_street'] : "0";
    echo "<p>The title is $pi_street </p>";
    file_put_contents($tempfolder ."/pi_street.txt",$pi_street,FILE_APPEND);

    $pi_pcode = isset($_POST['pi_pcode']) ? $_POST['pi_pcode'] : "0";
    echo "<p>The title is $pi_pcode </p>";
    file_put_contents($tempfolder ."/pi_pcode.txt",$pi_pcode,FILE_APPEND);

    $pi_city = isset($_POST['pi_city']) ? $_POST['pi_city'] : "0";
    echo "<p>The title is $pi_city </p>";
    file_put_contents($tempfolder ."/pi_city.txt",$pi_city,FILE_APPEND);

    $pi_phone = isset($_POST['pi_phone']) ? $_POST['pi_phone'] : "0";
    echo "<p>The title is $pi_phone </p>";
    file_put_contents($tempfolder ."/pi_phone.txt",$pi_phone,FILE_APPEND);

    $pi_fax = isset($_POST['pi_fax']) ? $_POST['pi_fax'] : "0";
    echo "<p>The title is $pi_fax </p>";
    file_put_contents($tempfolder ."/pi_fax.txt",$pi_fax,FILE_APPEND);

    //Project Manager
    $pm_title = isset($_POST['pm_title']) ? $_POST['pm_title'] : "0";
    echo "<p>The title is $pm_title </p>";
    file_put_contents($tempfolder ."/pm_title.txt",$pm_title,FILE_APPEND);

    $pm_lname = isset($_POST['pm_lname']) ? $_POST['pm_lname'] : "0";
    echo "<p>The title is $pm_lname </p>";
    file_put_contents($tempfolder ."/pm_lname.txt",$pm_lname,FILE_APPEND);

    $pm_fname = isset($_POST['pm_fname']) ? $_POST['pm_fname'] : "0";
    echo "<p>The title is $pm_fname </p>";
    file_put_contents($tempfolder ."/pm_fname.txt",$pm_fname,FILE_APPEND);

    $pm_street = isset($_POST['pm_street']) ? $_POST['pm_street'] : "0";
    echo "<p>The title is $pm_street </p>";
    file_put_contents($tempfolder ."/pm_street.txt",$pm_street,FILE_APPEND);

    $pm_pcode = isset($_POST['pm_pcode']) ? $_POST['pm_pcode'] : "0";
    echo "<p>The title is $pm_pcode </p>";
    file_put_contents($tempfolder ."/pm_pcode.txt",$pm_pcode,FILE_APPEND);

    $pm_city = isset($_POST['pm_city']) ? $_POST['pm_city'] : "0";
    echo "<p>The title is $pm_city </p>";
    file_put_contents($tempfolder ."/pm_city.txt",$pm_city,FILE_APPEND);

    $pm_phone = isset($_POST['pm_phone']) ? $_POST['pm_phone'] : "0";
    echo "<p>The title is $pm_phone </p>";
    file_put_contents($tempfolder ."/pm_phone.txt",$pm_phone,FILE_APPEND);

    $pm_fax = isset($_POST['pm_fax']) ? $_POST['pm_fax'] : "0";
    echo "<p>The title is $pm_fax </p>";
    file_put_contents($tempfolder ."/pm_fax.txt",$pm_fax,FILE_APPEND);

    $pm_email = isset($_POST['pm_email']) ? $_POST['pm_email'] : "0";
    echo "<p>The title is $pm_email </p>";
    file_put_contents($tempfolder ."/pm_email.txt",$pm_email,FILE_APPEND);

    $pm_gender = isset($_POST['pm_gender']) ? $_POST['pm_gender'] : "0";
    echo "<p>The title is $pm_gender </p>";
    file_put_contents($tempfolder ."/pm_gender.txt",$pm_gender,FILE_APPEND);

    $pm_gender = isset($_POST['pm_gender']) ? $_POST['pm_gender'] : "0";
    echo "<p>The title is $pm_gender </p>";
    file_put_contents($tempfolder ."/pm_gender.txt",$pm_gender,FILE_APPEND);

    $pm_nat = isset($_POST['pm_nat']) ? $_POST['pm_nat'] : "0";
    echo "<p>The title is $pm_nat </p>";
    file_put_contents($tempfolder ."/pm_nat.txt",$pm_nat,FILE_APPEND);

    $pm_tuid = isset($_POST['pm_tuid']) ? $_POST['pm_tuid'] : "0";
    echo "<p>The title is $pm_tuid </p>";
    file_put_contents($tempfolder ."/pm_tuid.txt",$pm_tuid,FILE_APPEND);

    $pm_lichtacc = isset($_POST['pm_lichtacc']) ? $_POST['pm_lichtacc'] : "0";
    echo "<p>The title is $pm_lichtacc </p>";
    file_put_contents($tempfolder ."/pm_lichtacc.txt",$pm_lichtacc,FILE_APPEND);

    //Researcher- person 1

    $res1_title = isset($_POST['res1_title']) ? $_POST['res1_title'] : "0";
    echo "<p>The title is $res1_title </p>";
    file_put_contents($tempfolder ."/res1_title.txt",$res1_title,FILE_APPEND);

    $res1_lname = isset($_POST['res1_lname']) ? $_POST['res1_lname'] : "0";
    echo "<p>The title is $res1_lname </p>";
    file_put_contents($tempfolder ."/res1_lname.txt",$res1_lname,FILE_APPEND);

    $res1_fname = isset($_POST['res1_fname']) ? $_POST['res1_fname'] : "0";
    echo "<p>The title is $res1_fname </p>";
    file_put_contents($tempfolder ."/res1_fname.txt",$res1_fname,FILE_APPEND);

    $res1_phone = isset($_POST['res1_phone']) ? $_POST['res1_phone'] : "0";
    echo "<p>The title is $res1_phone </p>";
    file_put_contents($tempfolder ."/res1_phone.txt",$res1_phone,FILE_APPEND);

    $res1_email = isset($_POST['res1_email']) ? $_POST['res1_email'] : "0";
    echo "<p>The title is $res1_email </p>";
    file_put_contents($tempfolder ."/res1_email.txt",$res1_email,FILE_APPEND);

    $res1_gender = isset($_POST['res1_gender']) ? $_POST['res1_gender'] : "0";
    echo "<p>The title is $res1_gender </p>";
    file_put_contents($tempfolder ."/res1_gender.txt",$res1_gender,FILE_APPEND);

    $res1_nat = isset($_POST['res1_nat']) ? $_POST['res1_nat'] : "0";
    echo "<p>The title is $res1_nat </p>";
    file_put_contents($tempfolder ."/res1_nat.txt",$res1_nat,FILE_APPEND);

    $res1_tuid = isset($_POST['res1_tuid']) ? $_POST['res1_tuid'] : "0";
    echo "<p>The title is $res1_tuid </p>";
    file_put_contents($tempfolder ."/res1_tuid.txt",$res1_tuid,FILE_APPEND);

    $res1_lichtacc = isset($_POST['res1_lichtacc']) ? $_POST['res1_lichtacc'] : "0";
    echo "<p>The title is $res1_tuid </p>";
    file_put_contents($tempfolder ."/res1_lichtacc.txt",$res1_lichtacc,FILE_APPEND);

    //Researcher- person 2

    $res2_title = isset($_POST['res2_title']) ? $_POST['res2_title'] : "0";
    echo "<p>The title is $res2_title </p>";
    file_put_contents($tempfolder ."/res2_title.txt",$res2_title,FILE_APPEND);

    $res2_lname = isset($_POST['res2_lname']) ? $_POST['res2_lname'] : "0";
    echo "<p>The title is $res2_lname </p>";
    file_put_contents($tempfolder ."/res2_lname.txt",$res2_lname,FILE_APPEND);

    $res2_fname = isset($_POST['res2_fname']) ? $_POST['res2_fname'] : "0";
    echo "<p>The title is $res2_fname </p>";
    file_put_contents($tempfolder ."/res2_fname.txt",$res2_fname,FILE_APPEND);

    $res2_phone = isset($_POST['res2_phone']) ? $_POST['res2_phone'] : "0";
    echo "<p>The title is $res2_phone </p>";
    file_put_contents($tempfolder ."/res2_phone.txt",$res2_phone,FILE_APPEND);

    $res2_email = isset($_POST['res2_email']) ? $_POST['res2_email'] : "0";
    echo "<p>The title is $res2_email </p>";
    file_put_contents($tempfolder ."/res2_email.txt",$res2_email,FILE_APPEND);

    $res2_gender = isset($_POST['res2_gender']) ? $_POST['res2_gender'] : "0";
    echo "<p>The title is $res2_gender </p>";
    file_put_contents($tempfolder ."/res2_gender.txt",$res2_gender,FILE_APPEND);

    $res2_nat= isset($_POST['res2_nat']) ? $_POST['res2_nat'] : "0";
    echo "<p>The title is $res2_nat </p>";
    file_put_contents($tempfolder ."/res2_nat.txt",$res2_nat,FILE_APPEND);

    $res2_tuid = isset($_POST['res2_tuid']) ? $_POST['res2_tuid'] : "0";
    echo "<p>The title is $res2_tuid </p>";
    file_put_contents($tempfolder ."/res2_tuid.txt",$res2_tuid,FILE_APPEND);

    $res2_lichtacc = isset($_POST['res2_lichtacc']) ? $_POST['res2_lichtacc'] : "0";
    echo "<p>The title is $res2_lichtacc </p>";
    file_put_contents($tempfolder ."/res2_lichtacc.txt",$res2_lichtacc,FILE_APPEND);

    //mmore researchers info
    $more_res_info = isset($_POST['more_res_info']) ? $_POST['more_res_info'] : "0";
    echo "<p>The title is $more_res_info </p>";
    file_put_contents($tempfolder ."/more_res_info.txt",$more_res_info,FILE_APPEND);

    //Project partners

    $pp_title = isset($_POST['pp_title']) ? $_POST['pp_title'] : "0";
    echo "<p>The title is $pp_title </p>";
    file_put_contents($tempfolder ."/pp_title.txt",$pp_title,FILE_APPEND);

    $pp_inst = isset($_POST['pp_inst']) ? $_POST['pp_inst'] : "0";
    echo "<p>The title is $pp_inst </p>";
    file_put_contents($tempfolder ."/pp_inst.txt",$pp_inst,FILE_APPEND);

    $pp_lname = isset($_POST['pp_lname']) ? $_POST['pp_lname'] : "0";
    echo "<p>The title is $pp_lname </p>";
    file_put_contents($tempfolder ."/pp_lname.txt",$pp_lname,FILE_APPEND);

    $pp_fname = isset($_POST['pp_fname']) ? $_POST['pp_fname'] : "0";
    echo "<p>The title is $pp_fname </p>";
    file_put_contents($tempfolder ."/pp_fname.txt",$pp_fname,FILE_APPEND);

    $pp_street = isset($_POST['pp_street']) ? $_POST['pp_street'] : "0";
    echo "<p>The title is $pp_street </p>";
    file_put_contents($tempfolder ."/pp_street.txt",$pp_street,FILE_APPEND);

    $pp_pcode = isset($_POST['pp_pcode']) ? $_POST['pp_pcode'] : "0";
    echo "<p>The title is $pp_pcode </p>";
    file_put_contents($tempfolder ."/pp_pcode.txt",$pp_pcode,FILE_APPEND);

    $pp_city = isset($_POST['pp_city']) ? $_POST['pp_city'] : "0";
    echo "<p>The title is $pp_city </p>";
    file_put_contents($tempfolder ."/pp_city.txt",$pp_city,FILE_APPEND);

    $pp_email = isset($_POST['pp_email']) ? $_POST['pp_email'] : "0";
    echo "<p>The title is $pp_email </p>";
    file_put_contents($tempfolder ."/pp_email.txt",$pp_email,FILE_APPEND);

    $pp_phone = isset($_POST['pp_phone']) ? $_POST['pp_phone'] : "0";
    echo "<p>The title is $pp_phone </p>";
    file_put_contents($tempfolder ."/pp_phone.txt",$pp_phone,FILE_APPEND);

    $pp_tuid = isset($_POST['pp_tuid']) ? $_POST['pp_tuid'] : "0";
    echo "<p>The title is $pp_tuid </p>";
    file_put_contents($tempfolder ."/pp_tuid.txt",$pp_tuid,FILE_APPEND);

    $pp_lichtacc = isset($_POST['pp_lichtacc']) ? $_POST['pp_lichtacc'] : "0";
    echo "<p>The title is $pp_lichtacc </p>";
    file_put_contents($tempfolder ."/pp_lichtacc.txt",$pp_lichtacc,FILE_APPEND);

    //more project partners info

    $more_pp_info = isset($_POST['more_pp_info']) ? $_POST['more_pp_info'] : "0";
    echo "<p>The title is $more_pp_info </p>";
    file_put_contents($tempfolder ."/more_pp_info.txt",$more_pp_info,FILE_APPEND);

    //project details

    $research_area = isset($_POST['research_area']) ? $_POST['research_area'] : "0";
    echo "<p>The title is $research_area </p>";
    file_put_contents($tempfolder ."/research_area.txt",$research_area,FILE_APPEND);

    $research_area_new = isset($_POST['research_area_new']) ? $_POST['research_area_new'] : "0";
    echo "<p>The title is $research_area_new </p>";
    file_put_contents($tempfolder ."/research_area_new.txt",$research_area_new,FILE_APPEND);

    $proj_enddate = isset($_POST['proj_enddate']) ? $_POST['proj_enddate'] : "0";
    echo "<p>The title is $proj_enddate </p>";
    file_put_contents($tempfolder ."/proj_enddate.txt",$proj_enddate,FILE_APPEND);

    $proj_hours = isset($_POST['proj_hours']) ? $_POST['proj_hours'] : "0";
    echo "<p>The title is $proj_hours </p>";
    file_put_contents($tempfolder ."/proj_hours.txt",$proj_hours,FILE_APPEND);

    //Abstract
    $abstract = isset($_POST['abstract']) ? $_POST['abstract'] : "0";
    echo "<p>The title is $abstract </p>";
    file_put_contents($tempfolder ."/abstract.txt",$abstract,FILE_APPEND);

    //Technical Description- project class

    $proj_class = isset($_POST['proj_class']) ? $_POST['proj_class'] : "0";
    echo "<p>The title is $proj_class </p>";
    file_put_contents($tempfolder ."/proj_class.txt",$proj_class,FILE_APPEND);

    //Detailed resource requirements

    $cpu_time = isset($_POST['cpu_time']) ? $_POST['cpu_time'] : "0";
    echo "<p>The title is $cpu_time </p>";
    file_put_contents($tempfolder ."/cpu_time.txt",$cpu_time,FILE_APPEND);

    $acce_nvidia = isset($_POST['acce_nvidia']) ? $_POST['acce_nvidia'] : "0";
    echo "<p>The title is $acce_nvidia </p>";
    file_put_contents($tempfolder ."/acce_nvidia.txt",$acce_nvidia,FILE_APPEND);

    $acce_xeonphi = isset($_POST['acce_xeonphi']) ? $_POST['acce_xeonphi'] : "0";
    echo "<p>The title is $acce_xeonphi </p>";
    file_put_contents($tempfolder ."/acce_xeonphi.txt",$acce_xeonphi,FILE_APPEND);

    $mem_pc = isset($_POST['mem_pc']) ? $_POST['mem_pc'] : "0";
    echo "<p>The title is $mem_pc </p>";
    file_put_contents($tempfolder ."/mem_pc.txt",$mem_pc,FILE_APPEND);

    $home_dir = isset($_POST['home_dir']) ? $_POST['home_dir'] : "0";
    echo "<p>The title is $home_dir </p>";
    file_put_contents($tempfolder ."/home_dir.txt",$home_dir,FILE_APPEND);

    $work_proj = isset($_POST['work_proj']) ? $_POST['work_proj'] : "0";
    echo "<p>The title is $work_proj </p>";
    file_put_contents($tempfolder ."/work_proj.txt",$work_proj,FILE_APPEND);

    $work_scratch = isset($_POST['work_scratch']) ? $_POST['work_scratch'] : "0";
    echo "<p>The title is $work_scratch </p>";
    file_put_contents($tempfolder ."/work_scratch.txt",$work_scratch,FILE_APPEND);

    //resource requirements for a typical batch run

    $req_maxcores = isset($_POST['req_maxcores']) ? $_POST['req_maxcores'] : "0";
    echo "<p>The title is $req_maxcores </p>";
    file_put_contents($tempfolder ."/req_maxcores.txt",$req_maxcores,FILE_APPEND);

    $req_cputime = isset($_POST['req_cputime']) ? $_POST['req_cputime'] : "0";
    echo "<p>The title is $req_cputime </p>";
    file_put_contents($tempfolder ."/req_cputime.txt",$req_cputime,FILE_APPEND);

    $req_mmpc = isset($_POST['req_mmpc']) ? $_POST['req_mmpc'] : "0";
    echo "<p>The title is $req_mmpc </p>";
    file_put_contents($tempfolder ."/req_mmpc.txt",$req_mmpc,FILE_APPEND);

    $req_dpsace = isset($_POST['req_dpsace']) ? $_POST['req_dpsace'] : "0";
    echo "<p>The title is $req_dpsace </p>";
    file_put_contents($tempfolder ."/req_dpsace.txt",$req_dpsace,FILE_APPEND);

    //Programming languages

    $fortran77 = isset($_POST['fortran77']) ? $_POST['fortran77'] : "0";
    echo "<p>The title is $fortran77 </p>";
    file_put_contents($tempfolder ."/fortran77.txt",$fortran77,FILE_APPEND);

    $fortran9095 = isset($_POST['fortran9095']) ? $_POST['fortran9095'] : "0";
    echo "<p>The title is $fortran9095 </p>";
    file_put_contents($tempfolder ."/fortran9095.txt",$fortran9095,FILE_APPEND);

    $fortran2003 = isset($_POST['fortran2003']) ? $_POST['fortran2003'] : "0";
    echo "<p>The title is $fortran2003 </p>";
    file_put_contents($tempfolder ."/fortran2003.txt",$fortran2003,FILE_APPEND);

    $c = isset($_POST['c']) ? $_POST['c'] : "0";
    echo "<p>The title is $c </p>";
    file_put_contents($tempfolder ."/c.txt",$c,FILE_APPEND);

    $cplusplus = isset($_POST['cplusplus']) ? $_POST['cplusplus'] : "0";
    echo "<p>The title is $cplusplus </p>";
    file_put_contents($tempfolder ."/cplusplus.txt",$cplusplus,FILE_APPEND);

    $java = isset($_POST['java']) ? $_POST['java'] : "0";
    echo "<p>The title is $java </p>";
    file_put_contents($tempfolder ."/java.txt",$java,FILE_APPEND);

    $soft_other = isset($_POST['soft_other']) ? $_POST['soft_other'] : "0";
    echo "<p>The title is $soft_other </p>";
    file_put_contents($tempfolder ."/soft_other.txt",$soft_other,FILE_APPEND);

    //programming models

    $mpi = isset($_POST['mpi']) ? $_POST['mpi'] : "0";
    echo "<p>The title is $mpi </p>";
    file_put_contents($tempfolder ."/mpi.txt",$mpi,FILE_APPEND);

    $openmp = isset($_POST['openmp']) ? $_POST['openmp'] : "0";
    echo "<p>The title is $openmp </p>";
    file_put_contents($tempfolder ."/openmp.txt",$openmp,FILE_APPEND);

    $shmem = isset($_POST['shmem']) ? $_POST['shmem'] : "0";
    echo "<p>The title is $shmem </p>";
    file_put_contents($tempfolder ."/shmem.txt",$shmem,FILE_APPEND);

    $hybrid = isset($_POST['hybrid']) ? $_POST['hybrid'] : "0";
    echo "<p>The title is $hybrid </p>";
    file_put_contents($tempfolder ."/hybrid.txt",$hybrid,FILE_APPEND);

    $model_other = isset($_POST['model_other']) ? $_POST['model_other'] : "0";
    echo "<p>The title is $model_other </p>";
    file_put_contents($tempfolder ."/model_other.txt",$model_other,FILE_APPEND);

    //tools

    $perfmon = isset($_POST['perfmon']) ? $_POST['perfmon'] : "0";
    echo "<p>The title is $perfmon </p>";
    file_put_contents($tempfolder ."/perfmon.txt",$perfmon,FILE_APPEND);

    $vampir = isset($_POST['vampir']) ? $_POST['vampir'] : "0";
    echo "<p>The title is $vampir </p>";
    file_put_contents($tempfolder ."/vampir.txt",$vampir,FILE_APPEND);

    $totview = isset($_POST['totview']) ? $_POST['totview'] : "0";
    echo "<p>The title is $totview </p>";
    file_put_contents($tempfolder ."/totview.txt",$totview,FILE_APPEND);

    $vtune = isset($_POST['vtune']) ? $_POST['vtune'] : "0";
    echo "<p>The title is $vtune </p>";
    file_put_contents($tempfolder ."/vtune.txt",$vtune,FILE_APPEND);

    $intelthreadtools = isset($_POST['intelthreadtools']) ? $_POST['intelthreadtools'] : "0";
    echo "<p>The title is $intelthreadtools </p>";
    file_put_contents($tempfolder ."/intelthreadtools.txt",$intelthreadtools,FILE_APPEND);

    $tools_other = isset($_POST['tools_other']) ? $_POST['tools_other'] : "0";
    echo "<p>The title is $tools_other </p>";
    file_put_contents($tempfolder ."/tools_other.txt",$tools_other,FILE_APPEND);

    $mkl_imkl = isset($_POST['mkl_imkl']) ? $_POST['mkl_imkl'] : "0";
    echo "<p>The title is $mkl_imkl </p>";
    file_put_contents($tempfolder ."/mkl_imkl.txt",$mkl_imkl,FILE_APPEND);

    //libraries

    $lapack = isset($_POST['lapack']) ? $_POST['lapack'] : "0";
    echo "<p>The title is $lapack </p>";
    file_put_contents($tempfolder ."/lapack.txt",$lapack,FILE_APPEND);

    $Sapack = isset($_POST['Sapack']) ? $_POST['Sapack'] : "0";
    echo "<p>The title is $Sapack </p>";
    file_put_contents($tempfolder ."/Sapack.txt",$Sapack,FILE_APPEND);

    $nag = isset($_POST['nag']) ? $_POST['nag'] : "0";
    echo "<p>The title is $nag </p>";
    file_put_contents($tempfolder ."/nag.txt",$nag,FILE_APPEND);

    $petsc = isset($_POST['petsc']) ? $_POST['petsc'] : "0";
    echo "<p>The title is $petsc </p>";
    file_put_contents($tempfolder ."/petsc.txt",$petsc,FILE_APPEND);

    $fftw = isset($_POST['fftw']) ? $_POST['fftw'] : "0";
    echo "<p>The title is $fftw </p>";
    file_put_contents($tempfolder ."/fftw.txt",$fftw,FILE_APPEND);

    //special requirements

    $spl_req = isset($_POST['spl_req']) ? $_POST['spl_req'] : "0";
    echo "<p>The title is $spl_req </p>";
    file_put_contents($tempfolder ."/spl_req.txt",$spl_req,FILE_APPEND);

    //final agreements

    $agree1 = isset($_POST['agree1']) ? $_POST['agree1'] : "0";
    echo "<p>The title is $agree1 </p>";
    file_put_contents($tempfolder ."/agree1.txt",$agree1,FILE_APPEND);

    $agree2 = isset($_POST['agree2']) ? $_POST['agree2'] : "0";
    echo "<p>The title is $agree2 </p>";
    file_put_contents($tempfolder ."/agree2.txt",$agree2,FILE_APPEND);

    $agree3 = isset($_POST['agree3']) ? $_POST['agree3'] : "0";
    echo "<p>The title is $agree3 </p>";
    file_put_contents($tempfolder ."/agree3.txt",$agree3,FILE_APPEND);

    $agree4 = isset($_POST['agree4']) ? $_POST['agree4'] : "0";
    echo "<p>The title is $agree4 </p>";
    file_put_contents($tempfolder ."/agree4.txt",$agree4,FILE_APPEND);

    $agree5 = isset($_POST['agree5']) ? $_POST['agree5'] : "0";
    echo "<p>The title is $agree5 </p>";
    file_put_contents($tempfolder ."/agree5.txt",$agree5,FILE_APPEND);

    $agree6 = isset($_POST['agree6']) ? $_POST['agree6'] : "0";
    echo "<p>The title is $agree6 </p>";
    file_put_contents($tempfolder ."/agree6.txt",$agree6,FILE_APPEND);

    $agreefinal = isset($_POST['agreefinal']) ? $_POST['agreefinal'] : "0";
    echo "<p>The title is $agreefinal </p>";
    file_put_contents($tempfolder ."/agreefinal.txt",$agreefinal,FILE_APPEND);


//shell commands : copies the main.tex to the unique dir
    shell_exec( 'cp "' . $lattemp . '/"* "' . $tempfolder . '"' );
//shell commands : control enters into the unique dir and executes the pdflatex command
    shell_exec('cd "' . $tempfolder . '"; pdflatex --interaction=nonstopmode main; mv main.pdf your_application.pdf');
//shell commands : rename the pdf file same as the folder name

    /* // We'll be outputting a PDF
 header('Content-Type: application/pdf');

 // It will be called downloaded.pdf
 header('Content-Disposition: attachment; filename="your_application.pdf"');

 // The PDF source is in original.pdf
 readfile('your_application.pdf');*/

//Generate Error if prepare fails
    if(!$stmt){
        echo "Prepare failed:" . $mysqli->error;
    }
//Binding all 35 parameters
    if(!$stmt->bind_param("ssssssisis",$proj_title,$prop_inst,$dir_title,$dir_lname,$dir_fname,$dir_street,$dir_pcode,$dir_city,$dir_phone,$dir_fax)){
        echo "Binding paramaters failed:(" . $stmt->errno . ")" . $stmt->error;
    }
//Generate Error if statement execution fails
    if(!$stmt->execute()){
        echo "Execute failed: (" . $stmt->errno .")" . $stmt->error;
    }
    echo "new records created successfully";

}


$stmt->close();
$conn->close();

?>
</body>
</html>