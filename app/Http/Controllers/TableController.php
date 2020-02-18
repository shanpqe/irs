<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    

    public function login()
    {

        return view('layouts.template.loginscreen');

    }


    public function forgotpwd()
    {
       
        return view('layouts.template.forgotscreen'); 
    
    }

    public function reset()
    {
       
        return view('layouts.template.resetscreen'); 
    
    }

    public function masters()
    {
       
        return view('layouts.template.masters.index'); 
    
    }

    public function uploadresume1()
    {
       
        return view('layouts.template.uploadresume1'); 
    
    }
    
    public function rec_myprofile()
    {
       
        return view('layouts.template.rec_myprofile'); 
    
    }
    
    public function test()
    {
       
        return view('layouts.template.testing'); 
    
    }

    public function test2()
    {
       
        return view('layouts.template.testing2'); 
    
    }
    public function test3()
    {
       
        return view('layouts.template.testing3'); 
    
    }
    
    public function test4()
    {
       
        return view('layouts.template.testing4'); 
    
    }

    public function recruitmentdata()
    {

        return view('layouts.template.recruitmentdata');
    }
    

    public function candidatedetails()
    {

        return view('layouts.template.candidatedetails');
    }
    
    
     public function candidateprofile()
    {              

        return view('layouts.template.candidateprofile');
    }
    
    public function users_and_roles()
    {              

        return view('layouts.template.user_roles.index');
    }
    
    public function users_and_roles_addedituser()
    {              

        return view('layouts.template.user_roles.addedituser');
    }
    public function users_and_roles_addeditrole()
    {              

        return view('layouts.template.user_roles.addeditrole');
    }
    public function  users_and_roles_viewuser()
    {              

        return view('layouts.template.user_roles.viewuser');
    }
       public function  users_and_roles_viewrole()
    {              

        return view('layouts.template.user_roles.viewrole');
    }
    
    
    
    public function candidateprofilefieldmanagement()
    {              

        return view('layouts.template.candidateprofilefieldmanagement');
    }
    

    public function masters_jobtitlemaster_index()
    {
        return view('layouts.template.masters.jobtitlemaster.index');
    }
    public function masters_jobtitlemaster_addedit()
    {
        return view('layouts.template.masters.jobtitlemaster.addedit');
    }

    public function masters_jobtitlemaster_viewjobtitle()
    {
        return view('layouts.template.masters.jobtitlemaster.viewjobtitle');
    }


     public function masters_unitmaster_index()
    {   
            return view('layouts.template.masters.unitmaster.index');
    }
    public function masters_unitmaster_viewunit()
    {   
            return view('layouts.template.masters.unitmaster.viewunit');
    }
    public function masters_unitmaster_addedit()
    {   
            return view('layouts.template.masters.unitmaster.addedit');
    }
    
    public function  masters_normalizedjobtitle_index()
    {   
            return view('layouts.template.masters.normalizedjobtitle.index');
    }
    public function  masters_normalizedjobtitle_viewNJT()
    {   
            return view('layouts.template.masters.normalizedjobtitle.viewNJT');
    }
    public function  masters_normalizedjobtitle_addedit()
    {   
            return view('layouts.template.masters.normalizedjobtitle.addedit');
    }
   
    
    
    public function  masters_skillmaster_viewskill()
    {   
            return view('layouts.template.masters.skillmaster.viewskill');
    }
    
    public function  masters_skillmaster_addedit()
    {   
            return view('layouts.template.masters.skillmaster.addedit');
    }
    public function  masters_skillmaster_index()
    {   
            return view('layouts.template.masters.skillmaster.index');
    }
    
    public function  masters_softskillmaster_index()
    {   
            return view('layouts.template.masters.softskillmaster.index');
    }
     public function  masters_softskillmaster_viewsoftskill()
    {   
            return view('layouts.template.masters.softskillmaster.viewsoftskill');
    }
      public function  masters_softskillmaster_addedit()
    {   
            return view('layouts.template.masters.softskillmaster.addedit');
    }
    
    
    public function masters_companymaster_index()
    {
        return View('layouts.template.masters.companymaster.index');
    }
    public function masters_companymaster_addedit()
    {
        return View('layouts.template.masters.companymaster.addedit');
    }
    public function masters_companymaster_viewcompany()
    {
        return View('layouts.template.masters.companymaster.viewcompany');
    }
    
    public function masters_externalconsultancy_index()
    {
        return View('layouts.template.masters.externalconsultancy.index');
    }
    public function masters_externalconsultancy_view()
    {
        return View('layouts.template.masters.externalconsultancy.view');
    }
    public function masters_externalconsultancy_addedit()
    {
        return View('layouts.template.masters.externalconsultancy.addedit');
    }

     public function masters_highestdegree_index()
    {
        return View('layouts.template.masters.highestdegree.index');
    }
    public function masters_highestdegree_addedit()
    {
        return View('layouts.template.masters.highestdegree.addedit');
    }
    public function masters_highestdegree_view()
    {
        return View('layouts.template.masters.highestdegree.view');
    }
   
    
    public function masters_majors_index()
    {
        return View('layouts.template.masters.majors.index');
    }
    public function masters_majors_addedit()
    {
        return View('layouts.template.masters.majors.addedit');
    }
    public function masters_majors_view()
    {
        return View('layouts.template.masters.majors.view');
    }
    
    
    public function masters_universitycollege_index()
    {
        return View('layouts.template.masters.universitycollegemaster.index');
    }
    public function masters_universitycollege_view()
    {
        return View('layouts.template.masters.universitycollegemaster.view');
    }
    public function masters_universitycollege_addedit()
    {
        return View('layouts.template.masters.universitycollegemaster.addedit');
    }
    

    public function masters_candidatestatus_index()
    {
        return View('layouts.template.masters.candidatestatus.index');
    }
    public function masters_candidatestatus_view()
    {
        return View('layouts.template.masters.candidatestatus.view');
    }
    public function masters_candidatestatus_addedit()
    {
        return View('layouts.template.masters.candidatestatus.addedit');
    }
    
    
     public function masters_currentcontracttype_index()
    {
        return View('layouts.template.masters.currentcontracttype.index');
    }
    public function masters_currentcontracttype_view()
    {
        return View('layouts.template.masters.currentcontracttype.view');
    }
    public function masters_currentcontracttype_addedit()
    {
        return View('layouts.template.masters.currentcontracttype.addedit');
    }


    public function masters_resumesource_index()
    {
        return View('layouts.template.masters.resumesource.index');
    }
    public function masters_resumesource_view()
    {
        return View('layouts.template.masters.resumesource.view');
    }
    public function masters_resumesource_addedit()
    {
        return View('layouts.template.masters.resumesource.addedit');
    }

    
    public function masters_currentemployment_index()
    {
        return View('layouts.template.masters.currentemployment.index');
    }
    public function masters_currentemployment_view()
    {
        return View('layouts.template.masters.currentemployment.view');
    }
    public function masters_currentemployment_addedit()
    {
        return View('layouts.template.masters.currentemployment.addedit');
    }


        public function adm_myprofile()
    {
       
        return view('layouts.template.adm_myprofile'); 
    
    }
    
      public function settings()
    {
       
        return view('layouts.template.settings'); 
    
    }
    
   

    
}
