<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ---------------
        // 쿼리 빌더
        // ---------------
        // select
        // $result = DB::select('select * from categories');
        // $no = '5';
        // $result = DB::select('select * from categories where no = :no'
        // , ['no' => $no]
        // );

        // $result = DB::select('select * from categories where no = ?'
        // , [$no, 7]
        // );

        // select
        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요.(게시글 번호로 오름차순 정렬 후 상위 5개만)
        // $result = DB::select(
        //     'SELECT brd.bno
        //         , brd.btitle
        //         , cat.name 
        //     from boards brd
        //     INNER JOIN categories cat
        //     ON brd.category = cat.no
        //     where brd.category = :no1
        //         or brd.category = :no2
        //         or brd.category = :no3
        //     order by brd.bno ASC 
        //     LIMIT 5'
        //     , ['no1' => $input[0]
        //     , 'no2' => $input[1]
        //     , 'no3' => $input[2]]
        //     );

        // insert
        // $a = ['1', 'adsfasdf', 'asdfasdfasdfasd', '2023-01-01', '2023-01-01'];
        // $result = DB::insert(
        //     'insert into boards (
        //         category
        //         , btitle
        //         , bcontent
        //         , created_at
        //         , updated_at
        //         )
        //     VALUES (
        //         :category
        //         , :btitle
        //         , :bcontent
        //         , :created_at
        //         , :updated_at
        //         )'
        // , $a);

        // update
        // 제목을 test로 하고 내용을 testtest로 변경
        // $b = ['test', 'testtest', 301];
        // $result = DB::update(
        //     'UPDATE boards 
        //     SET btitle = :btitle
        //     , bcontent = :bcontent
        //     WHERE bno = :bno
        //     ', $b);
        
        // delete
        // $result = DB::delete('delete from boards where bno in(?,?,?)', [301, 302, 303]);
        

        // ---------------
        // 쿼리 빌더 체이닝 
        // --------------- 
        $no = '5';

        // select * from categories where no = :no
        // $result = DB::table('categories')->where('no', '=', $no)->get();

        // select * from categories where no = :no1 or no = :no2
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orWhere('no', $no2)->dd();

        // select * from categories where no in(?, ?)
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->dd();

        // select * from categories where no NOT IN('5', '8')
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();
        
        // select id, no, name from categories
        // $result = DB::table('categories')->select('id', 'no', 'name')->dd();

        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')->select('id', 'no', 'name')->orderBy('name', 'desc')->dd();
        
        // select * from categories where no = ? and no = ?
        // $result = DB::table('categories')->where('no', '=', $no1)->where('no', '=', $no2)->get();
        
        // *** 주의해서 사용(사용 안하는 것을 추천) *** whereRaw()
        // $result = DB::table('categories')->whereRaw('no = '.$no1);
        
        // first() : Limit 1과 비슷한 작동, 실패시 false 리턴
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();
    
        // firstOrFail() : first() 와 같은 동작을 하는데, 실패시 결과가 예외 발생(엘로퀀트 모델 객체에서만 사용 가능)
        // $result = DB::table('boards')->orderBy('bno', 'desc')->firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // 트랜잭션
        // DB::beginTransaction(); // 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋

        // 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력
        // 카테고리 번호, 카테고리 명, 갯수
        // 체이닝 이용해서

        // group by 쓸때 select에서 쓴 부분 다 적기
        $result = DB::table('categories as c')
        ->join('boards as b', 'c.no', '=', 'b.category')
        ->select( 'c.no', 'c.name', DB::raw('COUNT(bno) as cnt') )
        ->where('c.active_flg', '1')
        ->groupBy('c.no', 'c.name')
        ->get()
        ;

        // $result = DB::table('categories')
        // ->join('boards', 'categories.no', '=', 'boards.category')
        // ->select('categories.no', 'categories.name', 'COUNT(*)')
        // ->where('active_flg', '1')
        // ->groupBy('boards.category')
        // ->get();
        


        return var_dump($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
