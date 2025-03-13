<?php

namespace App\Controllers;

use App\Models\ModuleModel;
use App\Models\SelectedModuleModel;
use CodeIgniter\Controller;

class DocumentationController extends Controller
{
    public function index()
    {
        $moduleModel = new ModuleModel();
        $data['modules'] = $moduleModel->findAll();
        return view('documentation', $data);
    }

    public function viewModule($moduleName)
    {
        $moduleModel = new ModuleModel();
        $selectedModuleModel = new SelectedModuleModel();

        $module = $moduleModel->where('modulename', urldecode($moduleName))->first();
        if (!$module) {
            return redirect()->to('/documentation')->with('error', 'Module not found.');
        }

        $data = [
            'module' => $module,
            'versions' => $selectedModuleModel->where('module_id', $module['module_id'])->findAll()
        ];

        return view('selected_module', $data);
    }

    public function selectModule()
{
    $session = session();
    if ($this->request->getMethod() === 'POST') { // now checking uppercase
        $module_id = $this->request->getPost('module_id');
        $module_name = $this->request->getPost('modulename');

        $session->set('selected_module', [
            'id'   => $module_id,
            'name' => $module_name
        ]);

        return redirect()->to('/documentation/view/' . urlencode($module_name));
    }

    return redirect()->to('/documentation');
}
}