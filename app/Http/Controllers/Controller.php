<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employer;
use App\Job;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function get_employers(Employer $employer)
    {
        $employers = $employer->get()->toArray();
        return $employers;
    }

    public function insert_employer()
    {
        $data = array(
            'login' => $_GET['login'],
            'nome' => $_GET['nome'],
            'cpf' => $_GET['cpf'],
            'email' => $_GET['email'],
            'endereco' => $_GET['endereco'],
            'senha' => $_GET['senha'],
        );
        return Employer::create($data);
    }

    public function edit_employer()
    {
        $id = $_GET['id'];
        $data = array(
            'login' => $_GET['login'],
            'nome' => $_GET['nome'],
            'cpf' => $_GET['cpf'],
            'email' => $_GET['email'],
            'endereco' => $_GET['endereco'],
            'senha' => $_GET['senha'],
        );
        return Employer::where('id', $id)->update($data);
    }

    public function delete_employer()
    {
        $id = $_GET['id'];
        return Employer::where('id', $id)->delete();
    }


    public function get_companys(Company $company)
    {
        $companys = $company->get()->toArray();
        return $companys;
    }

    public function insert_company()
    {
        $data = array('nome' => $_GET['nome'],
            'cnpj' => $_GET['cnpj'],
            'endereco' => $_GET['endereco']);
        return Company::create($data);
    }

    public function edit_company()
    {
        $id = $_GET['id'];
        $data = array('nome' => $_GET['nome'],
            'cnpj' => $_GET['cnpj'],
            'endereco' => $_GET['endereco']);
        return Company::where('id', $id)->update($data);
    }

    public function delete_company()
    {
        $id = $_GET['id'];
        return Company::where('id', $id)->delete();
    }

    public function get_jobs(Job $job)
    {
        $jobs = $job->get()->toArray();
        return $jobs;
    }

    public function get_jobs_by_company_id(Job $job, $company_id)
    {
        $jobs = $job->where('company_id', $company_id)->get()->toArray();
        return $jobs;
    }

    public function get_jobs_by_employer_id(Job $job, $employer_id)
    {
        $jobs = $job->where('employer_id', $employer_id)->get()->toArray();
        return $jobs;
    }

    public function insert_job()
    {
        $data = array('company_id' => $_GET['company_id'], 'employer_id' => $_GET['employer_id']);
        return Job::create($data);
    }

    public function insert_jobs_company($company_id)
    {
        $employers = explode($_GET['employers'], ',');
        foreach ($employers as $employer) {
            $data = array('company_id' => $company_id, 'employer_id' => $employer);
            Job::create($data);
        }
        return sizeof($employers);
    }

    public function insert_jobs_employer($employer_id)
    {
        $companys = explode($_GET['companys'], ',');
        foreach ($companys as $company) {
            $data = array('company_id' => $company, 'employer_id' => $employer_id);
            Job::create($data);
        }
        return sizeof($companys);
    }

    public function edit_job()
    {
        $id = $_GET['id'];
        $data = array('company_id' => $_GET['company_id'], 'employer_id' => $_GET['employer_id']);
        return Job::where('id', $id)->update($data);
    }

    public function delete_job()
    {
        $id = $_GET['id'];
        return Job::where('id', $id)->delete();
    }
}
