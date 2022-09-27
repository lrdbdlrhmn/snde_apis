<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  /*
    public function index()
    {
    # code...
        
    }
//
  public function check_balance(Request $request)
  {
  # code...
        $invoice_ref = $request->id;
        if (!isset($invoice_ref)) {
            # code...
            $this->sendError('not_found','error');
        }
        $user = ApiController::user_info($invoice_ref);

        if (!isset($user)) {
            # code...
            $this->sendError('not_found','error');
        }
        return json_encode([
            'user' => $user
        ]);
  }
  public function invoice(Request $request)
  {
  # code...
      $invoice_ref = $request->id;
      if (!isset($invoice_ref)) {
        # code...
      }
      $user = ApisService::user_info($invoice_ref);
      if (!isset($user)) {
        # code...

      }
      $header_with_details = ApisService::header_with_details($invoice_ref);

      if (!isset($header_with_details)) {
        # code...
      }
  }

  public function show(Request $request)
  {
    $report = Report::find($request->id);
    
    if ($report->image->attached) {
        # code...
        throw new Exception("Error Processing Request", 1);
        
    }
    //send_data report.image.download, filename: report.image.filename.to_s, content_type: report.image.content_type
  }
  */
}
