<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Student;

class StudentController extends Controller
{
    public function facade()
    {
      // $select = DB::select('select * from student');
      // var_dump($select);

      // $insert = DB::insert('insert into student (name,age) ['hale',18]);
      // var_dump($insert);

      // $update = DB::update('update student set age = ? where name = ?', [20,'hale']);
      // var_dump($update);

      // $delete = DB::delete('delete from student where 'id' > ?', [3]);
      // var_dump($delete);
      }

    public function eloquent()
    {
      // $insert = DB::table('student')->
      // insert(['name' => 'Mac','age' => 18]);
      // var_dump($insert);

      // $insertGetId = DB::table('student')->
      // insertGetId(['name' => 'aName','age' => 20]);
      // var_dump($insertGetId);

      // $insertArr = DB::table('student') ->
      // insert([
      //   ['name' => 'eloquent','age' => 12],
      //   ['name' => 'bName','age' => 20]
      // ]);
      // var_dump($insertArr);

      // $update = DB::table('student')
      // -> where('id' , 2)
      // -> update(['age' => 22]);
      // var_dump($update);

      // $update = DB::table('student')->increment('age',1);
      // $udpate = DB::table('student')->decrement('age',1);

      // $udpate = DB::table('student')
      // -> where('id' ,3)
      // -> increment('age',3,['name' => 'demo']);
      // var_dump($udpate);

      // $truncate = DB::table('student')->truncate();

      // $get = DB::table('student') -> get();
      // dd($get);

      // $first = DB::table('student')
      // -> orderBy('id','desc')
      // -> first();
      // dd($first);

      // $where = DB::table('student')
      // ->where('id','>=',1)
      // ->get();
      // dd($where);

      // $whereRaw = DB::table('student')
      // ->whereRaw('id >= ? and age > ?',[1,1])
      // ->get();
      // dd($whereRaw);

      // $pluck = DB::table('student')->pluck('name');
      // dd($pluck);

      // $lists = DB::table('student') -> lists('name','id');
      // dd($lists);

      // $select = DB::table('student') -> select('id','name')
      // ->get();
      // dd($select);

      // echo "<pre>";
      // DB::table('student') -> chunk(2,function($student){
      // var_dump($student);
      // if ($student > 2)
      // return false;
      // });

    }

    public function jhFunction()
    {
      // $count = DB::table('student')->count();
      // var_dump($count);

      // $max = DB::table('student')->max('age');
      // var_dump($max);

      // $min = DB::table('student')->min('age');
      // var_dump($min);

      // $avg = DB::table('student')->avg('age');
      // var_dump($avg);

      // $sum = DB::table('student')->sum('age');
      // var_dump($sum);

    }

    public function eloquentORM()
    {
      // $all = Student::all();
      // dd($all);

      // $find = Student::find(2);
      // dd($find);

      // $findOrFail = Student::findOrFail(3);
      // dd($findOrFail);

      // $get = Student::get();
      // dd($get);

      // $first = Student::where('id','>','3')
      // ->orderBy('age','desc')
      // ->first();
      // dd($first);

      // echo "<pre>";
      // Student::chunk(2,function($chunk){
      //   var_dump($chunk);
      // });

      // $count = Student::count();
      // var_dump($count);

      // $where = Student::where('id','>',3) -> max('age');
      // var_dump($where);
    }

    public function model()
    {
      // $model = new Student();
      // $model -> name = 'Hale';
      // $model -> age = 21;
      // $bool = $model ->save();
      // dd($bool);

      // $select = Student::find(15);
      // echo $select->created_at;
      // echo date('Y-m-d H:i:s', $select ->created_at);

      // $create = Student::create(
      // ['name' => 'Kim','age' => 18]
      // );
      // dd($create);

      // $firstOrCreate = Student::firstOrCreate(
      // ['name' => 'Dear','age' => 18]
      // );
      // dd($firstOrCreate);

      // $firstOrNew = Student::firstOrNew([
      //   'name' => 'Adam','age' => 20
      // ]);
      // $bool = $firstOrNew -> save();
      // dd($bool);

      // $update = Student::find(13);
      // $update -> name = 'Chris';
      // $bool = $update -> save();
      // dd($bool);

      // $updateRaw = Student::where('id','>',20)
      // -> update (['age' => 21]);
      // var_dump($updateRaw);

      // $delete = Student::find(19)
      // ->delete();
      // var_dump($delete);
      // $delete = Student::find(19);
      // $bool = $delete -> delete();
      // var_dump($bool);

      // $destroy = Student::destroy(1,2);
      // var_dump($destroy);

      // $delete = Student::where('name','=','demo')
      // ->delete();
      // var_dump($delete);


    }

    public function blade()
    {
      return view('layouts.layouts');
    }

    public function index()
    {
      $name = 'Hale';
      $arr = ['Hale','Mike'];
      return view('layouts.index',[
        'name' => $name,
        'arr' => $arr,
      ]);
    }

    public function child()
    {

      // $get = Student::get();
      $null = [];

      $name = "Hale";
      $arr = ['Hale','Mike'];
      return view('layouts.child',[
        'name' => $name,
        'arr' => $arr,
        // 'get' => $get,
        'null' => $null,
      ]);
    }
    public function url()
    {
      return view('layouts.url');
    }

}
