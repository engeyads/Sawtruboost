<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leads;
use App\Models\Areas;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LeadsController extends Controller
{
    /**
     * Display a listing of the leads
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $leads = Leads::orderby('created_at','desc')->paginate(9); //fetch all blog posts from DB
	    return view('pages.crm.leads.index', [
            'leads' => $leads,
        ]); //returns the view with posts
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $area = Areas::select('name')->where('code',$request->area)->first();

        $newLead = Leads::create([
            'name' => $request->name,
            'company' => $request->company,
            'area' => $request->area,
            'phone' => $request->phone,
            'email' => $request->email,
            'service' => $request->service,
            'website' => $request->website,
            'msg' => $request->msg,
        ])->userProfile()->create([
            'tag' => substr($request->email, 0,strpos($request->email,"@")),
            'full_name' => $request->name,
            'mobile' => $request->phone,
            'country' => $area->name
        ]);

        return back()->withStatus(__('Suceessfuly stored!'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return 'pages.crm.leads.create';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id){
        $lead = Leads::find($id);
        return view('pages.crm.leads.show',compact('lead'));
    }

   /**
     * Update the lead
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Leads $lead){

        $lead->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id){
        Leads::find($id)->delete();
        return redirect()->route('leads.index')
                        ->with('success','Lead deleted successfully');
    }

    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     * @return \Illuminate\Http\Response
     */
    public function edit(Leads $lead){
        return view('pages.crm.leads.edit', [
            'lead' => $lead,
        ]); //returns the view with posts
    }


    /**
    * @param $customer_data
    */
   public function ExportExcel($customer_data){
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '4000M');
    try {
        $spreadSheet = new Spreadsheet();
        $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
        $spreadSheet->getActiveSheet()->fromArray($customer_data);
        $Excel_writer = new Xls($spreadSheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Customer_ExportedData.xls"');
        header('Cache-Control: max-age=0');
        ob_end_clean();
        $Excel_writer->save('php://output');
        exit();
    } catch (Exception $e) {
        return;
    }
}

/**
 *This function loads the customer data from the database then converts it
 * into an Array that will be exported to Excel
 */
function exportData(){
    $data = Leads::with('userProfile')->orderBy('id', 'DESC')->get();
    $data_array [] = array('name','company','area','phone','email','service','website','msg','title','full_name','fname','mname','lname','gender','birthday','bio','marital','country','mobile','iban','career','cv','salary','worktime','started_at','end_at','passport','work_permit','visa');
    foreach($data as $data_item)
    {
        $data_array[] = array(
            'name' => $data_item->name,
            'company' => $data_item->company,
            'area' => $data_item->area,
            'phone' => $data_item->phone,
            'email' => $data_item->email,
            'service' => $data_item->service,
            'website' => $data_item->website,
            'msg' => $data_item->msg,
            'title' => $data_item->title,
            'full_name' => $data_item->full_name,
            'fname' => $data_item->fname,
            'mname' => $data_item->mname,
            'lname' => $data_item->lname,
            'gender' => $data_item->gender,
            'birthday' => $data_item->birthday,
            'bio' => $data_item->bio,
            'marital' => $data_item->marital,
            'country' => $data_item->country,
            'mobile' => $data_item->mobile,
            'iban' => $data_item->iban,
            'career' => $data_item->career,
            'cv' => $data_item->cv,
            'salary' => $data_item->salary,
            'worktime' => $data_item->worktime,
            'started_at' => $data_item->started_at,
            'end_at' => $data_item->end_at,
            'passport' => $data_item->passport,
            'work_permit' => $data_item->work_permit,
            'visa' => $data_item->visa
        );
    }
    $this->ExportExcel($data_array);
}
}

