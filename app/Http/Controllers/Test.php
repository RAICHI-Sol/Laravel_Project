<?php

namespace App\Http\Controllers;

class Test extends Controller
{
    public static function from_select($fromid):string{
        $from = array(
                    '北海道','青森県','岩手県','宮城県','秋田県','山形県',
                    '福島県','茨城県','栃木県','群馬県','埼玉県','千葉県',
                    '東京都','神奈川県','新潟県','富山県','石川県','福井県',
                    '山梨県','長野県','岐阜県','静岡県','愛知県','三重県',
                    '滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県',
                    '鳥取県','島根県','岡山県','広島県','山口県','徳島県',
                    '香川県','愛媛県','高知県','福岡県','佐賀県','長崎県',
                    '熊本県','大分県','宮崎県','鹿児島県','沖縄県'
                );
        return $from[$fromid];
    }

    public static function job_select($jobid):string{
        $job = array(
                    "事務系","技術系","販売系","営業・企画","教育・医療系",
                    "IT系","公務員","経営者・役員","自営業","クリエーター系",
                    "アーティスト","フリーランス","主婦","パート・アルバイト",
                    "学生","その他"
                );
        return $job[$jobid];
    }

    public static function checkbox($target,$sex){
        return ($target == $sex) ? 'checked': '';
    }

    public static function get_url($title,$id,$search){
        return ($title =='Home') ? './?page='.$id: './result/?page='.$id.'&search='.$search;
    }
}
