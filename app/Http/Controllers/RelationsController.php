<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Address;
class RelationsController extends Controller
{
   public function hasOneRelation(){
       $address=\App\Models\Address::with(['branch'=>function($q){$q->select('branch_name','branch_address');}])->find(7);

       return response()->json($address );
   }
    public function hasOneRelationReverse(){
        $branch =\App\Models\Branch::with(['address'=>function($q){
            $q->select('city','branch_address');}])->find(3);

//$branch->makeVisible(['branch_address']);

        return $branch;
    }
public function whereHasRelation(){
       return Address::whereHas('branch',function ($q)
       {
         $q->where('country','ajax');
       })->get();
}
    public function  whereDoesNotHaveRelation(){

        return Address::whereDoesntHave('branch')->get();
    }




public function getBranchEmployees(){
    //$branch=Branch::find(4);
    //return $branch;
    //  طريقة تانية لجيب من الافرع يلي id  هوي 4
    //Branch::where('branch_id',4)->first();
    //return $branch;
    //في حال كنت عم جيب أول سطر تماما بالجدول
    //Branch::first();
    //return $branch;


    //لحتى جيب أطباء المشفى  بستعين بأسماء العلاقات بالمودل بغير بس بعبارة ال return السابقة
    //return $branch->employee;
//لحتى رجع بيانات فرع وشوفيه موظفين بنفس الوقت بستخدم with
 // return $branch=Branch::with('employee')->find(4);
   //لحتى مثلا بس اسم الفرع يلي id هوي 4
    //$branch=Branch::with('employee')->find(4);
   //return $branch->branch_name;
    //في حال بدي أسماء الموظفين يلي بفرع id=4 هون بحتاج حلقة لان عندي كذا موظف
    //$branch=Branch::with('employee')->find(4);
    //$employees=$branch->employee;
    //foreach ($employees as $employee){
      //   echo  $employee->salary.'</br>';
    //@endforeach

//في حال بدي شوف فرع  موظف ما
    //$employees=$branch->employee;
   $employee= Employee::find('1');
     return $employee->branch_name;
    }

public function employee($branch_id){
    $branch =Branch::find($branch_id);
    $employees= $branch->employee;
    return view('branch.showEmployee',compact('employees'));
}


public function deleteBranch($branch_id){
     $branch=  Branch::find($branch_id);
      if(!$branch)
          return abort('404');
    $branch->employee()->delete();

    $branch->delete();
    return redirect()->route('branch.show');
}

public function  employeeRoles($user_id){
     $employee=Employee::find($user_id);
     $role=$employee->role;
     return view('branch.showRole',compact('role'));
}
}


