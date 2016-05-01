<?php session_start(); 
include('database.php');
include('functions/getSingleValue.php');
require('fpdf/fpdf.php');
 
$cv_id=filter_input(INPUT_GET,'cv_id');
$type=filter_input(INPUT_GET,'type');
switch ($type)
{
    case '2':
        if(isset($cv_id))
        {
        $pdf=new FPDF();
        $pdf->AddPage();
    $pdf->SetFont("Times","", "13");
 $pdf->Cell(30,5,'YourCV',0,1);
  $pdf->Cell("5","5","support@yourcv.eu",0,1);
 //title
 $pdf->SetFont("Arial", "B", "20");
 $pdf->Cell(0,10,'Curriculum Vitae',0,1,"C");
 $pdf->Cell(0,10,"",0,1,"C");
  //start data
  $pdf->SetFont("Times","", "15");
        $pdf->Cell(40, 5,"Personal Data:", 0, 0, "L");
  
        $pdf->Cell(0,10,'',0,1);
        $pdf->SetFont("Times","", "12");
    
    
    
    
    
    
    
    $query=$db->prepare("SELECT cv_questions.id_cv_questions,cv_questions.cv_question,cv_answers.cv_answer FROM `cv_answers` 
INNER JOIN cv_questions ON cv_answers.id_cv_question=cv_questions.id_cv_questions
INNER JOIN cv as c on cv_answers.id_cv=c.id_cv
INNER JOIN user as u on c.id_user=u.id_user
WHERE c.id_cv=:id_cv AND cv_questions.id_cv_questions<10

");
    $query->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query->execute();
    $x=50;
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
        if($row['cv_answer']==null)
        {
            continue;
        }
        $pdf->Cell(60, 5,  ucfirst($row['cv_question']).":", 0, 0, "R");
        
        $pdf->Cell(10,5,'',0);
        $pdf->Cell(60, 5,  iconv('UTF-8','windows-1252' , ucfirst($row['cv_answer'])), 0, 0, "L");
        $pdf->Line(10, $x, 140, $x);
        $pdf->Cell(10,5,'',0,1);
        $x=$x+5;
       //echo $row['cv_question']." ".$row['cv_answer']."<br/>";
    }
    $pdf->Line(10, 95, 140, 95);
    $pdf->Line(10, 50, 10, 95);
    $pdf->Line(140, 50, 140, 95);
    $pdf->Line(75, 50, 75, 95);
    $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Language', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $pdf->Cell(40, 5,'Language', 1, 0, "C");
      $pdf->Cell(30, 5,'Listening', 1, 0, "C");
      $pdf->Cell(30, 5,'Reading', 1, 0, "C");
      $pdf->Cell(30, 5,'Spoken interaction', 1, 0, "C");
      $pdf->Cell(30, 5,'Spoken production', 1, 0, "C");
      $pdf->Cell(30, 5,'Writing', 1, 0, "L");
      $pdf->Cell(0,10,'',0,1);
    $query2=$db->prepare("SELECT * FROM `cv_answer_languages`  as ca
INNER JOIN cv_languages_levels as cvl on ca.id_cv_language_levels=cvl.id_cv_language_levels
INNER JOIN languages as l on ca.id_language=l.id_language
WHERE id_cv=:id_cv");
    $query2->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query2->execute();
    while($row2=$query2->fetch(PDO::FETCH_ASSOC))
    {
       $pdf->Cell(40, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['language'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['listening'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['reading'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['spoken_interaction'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['spoken_production'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['writing'])), 1, 0, "C");
      $pdf->Cell(0,10,'',0,1);
        
    }
    
     $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Education', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $query3=$db->prepare("SELECT * FROM `cv_education` WHERE id_cv=:id_cv");
    $query3->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query3->execute();
     while($row3=$query3->fetch(PDO::FETCH_ASSOC))
    {
         if($row3['end_date']=='Present')
             {
             $date='Present';
             
             }else{$date=iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row3['end_date'])));}
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['course'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['institution_name'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['qualification_awarded'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row3['start_date']))), 1, 0, "C");
    $pdf->Cell(35, 5,  $date, 1, 0, "C");
    $pdf->Cell(0,10,'',0,1);
    
    }
    $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Work Experience', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $query4=$db->prepare("SELECT * FROM `cv_work_experience` WHERE id_cv=:id_cv");
    $query4->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query4->execute();
     while($row4=$query4->fetch(PDO::FETCH_ASSOC))
    {
         if($row4['end_date']=='Present')
             {
             $date='Present';
             
             }else{$date=iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row4['end_date'])));}
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row4['job_title'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row4['company_name'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row4['start_date']))), 1, 0, "C");
    $pdf->Cell(35, 5,  $date, 1, 0, "C");
    $pdf->Cell(0,10,'',0,1);
    
    }
     $query5=$db->prepare("SELECT cv_questions.id_cv_questions,cv_questions.cv_question,cv_answers.cv_answer FROM `cv_answers` 
INNER JOIN cv_questions ON cv_answers.id_cv_question=cv_questions.id_cv_questions
INNER JOIN cv as c on cv_answers.id_cv=c.id_cv
INNER JOIN user as u on c.id_user=u.id_user
WHERE c.id_cv=:id_cv AND cv_questions.id_cv_questions>12

");
    $query5->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query5->execute();
    $count = $query5->rowCount();
    if($count==0)
    {
        
        
    }
    else
    {
      $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Other Skills', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);  
    }
    
    
   
    while($row5=$query5->fetch(PDO::FETCH_ASSOC))
    {
        if($row5['cv_answer']==null)
        {
            continue;
        }
        $pdf->Cell(60, 5,  ucfirst($row5['cv_question']).":", 0, 0, "R");
        $pdf->Cell(10,5,'',0);
        $pdf->Cell(60, 5,  iconv('UTF-8','windows-1252' , ucfirst($row5['cv_answer'])), 0, 0, "L");
        $pdf->Cell(10,5,'',0,1);
       //echo $row['cv_question']." ".$row['cv_answer']."<br/>";
    }
    
        }
        $pdf->Output();
        break;
    case '1':
       $pdf=new FPDF();
        $pdf->AddPage();
    $pdf->SetFont("Times","", "13");
 $pdf->Cell(30,5,'YourCV',0,1);
  $pdf->Cell("5","5","support@yourcv.eu",0,1);
 //title
 $pdf->SetFont("Arial", "B", "20");
 $pdf->Cell(0,10,'Curriculum Vitae',0,1,"C");
 $pdf->Cell(0,10,"",0,1,"C");
  //start data
  $pdf->SetFont("Times","", "15");
        $pdf->Cell(40, 5,"Personal Data:", 0, 0, "L");
  
        $pdf->Cell(0,10,'',0,1);
        $pdf->SetFont("Times","", "12");
    
    
    
    
    
    
    $query=$db->prepare("SELECT cv_questions.id_cv_questions,cv_questions.cv_question,cv_answers.cv_answer FROM `cv_answers` 
INNER JOIN cv_questions ON cv_answers.id_cv_question=cv_questions.id_cv_questions
INNER JOIN cv as c on cv_answers.id_cv=c.id_cv
INNER JOIN user as u on c.id_user=u.id_user
WHERE c.id_cv=:id_cv AND cv_questions.id_cv_questions>23 AND cv_questions.id_cv_questions<=32 

");
    $query->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query->execute();
    $x=50;
    while($row=$query->fetch(PDO::FETCH_ASSOC))
    {
        if($row['cv_answer']==null)
        {
            continue;
        }
        $pdf->Cell(60, 5,  ucfirst($row['cv_question']).":", 0, 0, "R");
        
        $pdf->Cell(10,5,'',0);
        $pdf->Cell(60, 5,  iconv('UTF-8','windows-1252' , ucfirst($row['cv_answer'])), 0, 0, "L");
        $pdf->Line(10, $x, 140, $x);
        $pdf->Cell(10,5,'',0,1);
        $x=$x+5;
       //echo $row['cv_question']." ".$row['cv_answer']."<br/>";
    }
    $pdf->Line(10, 95, 140, 95);
    $pdf->Line(10, 50, 10, 95);
    $pdf->Line(140, 50, 140, 95);
    $pdf->Line(75, 50, 75, 95);
    $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Language', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $pdf->Cell(40, 5,'Language', 1, 0, "C");
      $pdf->Cell(30, 5,'Listening', 1, 0, "C");
      $pdf->Cell(30, 5,'Reading', 1, 0, "C");
      $pdf->Cell(30, 5,'Spoken interaction', 1, 0, "C");
      $pdf->Cell(30, 5,'Spoken production', 1, 0, "C");
      $pdf->Cell(30, 5,'Writing', 1, 0, "L");
      $pdf->Cell(0,10,'',0,1);
    $query2=$db->prepare("SELECT * FROM `cv_answer_languages`  as ca
INNER JOIN cv_languages_levels as cvl on ca.id_cv_language_levels=cvl.id_cv_language_levels
INNER JOIN languages as l on ca.id_language=l.id_language
WHERE id_cv=:id_cv");
    $query2->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query2->execute();
    while($row2=$query2->fetch(PDO::FETCH_ASSOC))
    {
       $pdf->Cell(40, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['language'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['listening'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['reading'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['spoken_interaction'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['spoken_production'])), 1, 0, "C");
      $pdf->Cell(30, 5,  iconv('UTF-8','windows-1252' , ucfirst($row2['writing'])), 1, 0, "C");
      $pdf->Cell(0,10,'',0,1);
        
    }
    
     $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Education', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $query3=$db->prepare("SELECT * FROM `cv_education` WHERE id_cv=:id_cv");
    $query3->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query3->execute();
     while($row3=$query3->fetch(PDO::FETCH_ASSOC))
    {
         if($row3['end_date']=='Present')
             {
             $date='Present';
             
             }else{$date=iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row3['end_date'])));}
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['course'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['institution_name'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row3['qualification_awarded'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row3['start_date']))), 1, 0, "C");
    $pdf->Cell(35, 5,  $date, 1, 0, "C");
    $pdf->Cell(0,10,'',0,1);
    
    }
    $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Work Experience', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);
    $query4=$db->prepare("SELECT * FROM `cv_work_experience` WHERE id_cv=:id_cv");
    $query4->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query4->execute();
     while($row4=$query4->fetch(PDO::FETCH_ASSOC))
    {
         if($row4['end_date']=='Present')
             {
             $date='Present';
             
             }else{$date=iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row4['end_date'])));}
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row4['job_title'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , ucfirst($row4['company_name'])), 1, 0, "C");
    $pdf->Cell(35, 5,  iconv('UTF-8','windows-1252' , date("d.m.y",strtotime($row4['start_date']))), 1, 0, "C");
    $pdf->Cell(35, 5,  $date, 1, 0, "C");
    $pdf->Cell(0,10,'',0,1);
    
    }
     $query5=$db->prepare("SELECT cv_questions.id_cv_questions,cv_questions.cv_question,cv_answers.cv_answer FROM `cv_answers` 
INNER JOIN cv_questions ON cv_answers.id_cv_question=cv_questions.id_cv_questions
INNER JOIN cv as c on cv_answers.id_cv=c.id_cv
INNER JOIN user as u on c.id_user=u.id_user
WHERE c.id_cv=:id_cv AND cv_questions.id_cv_questions>32

");
    $query5->bindParam(':id_cv',$cv_id,PDO::PARAM_INT);
    $query5->execute();
    $count = $query5->rowCount();
    if($count==0)
    {
        
        
    }
    else
    {
      $pdf->Cell(0,10,'',0,1);
    $pdf->SetFont("Times","", "15");
    $pdf->Cell(40, 5,'Other Skills', 0, 0, "C");
    $pdf->SetFont("Times","", "10");
    $pdf->Cell(0,10,'',0,1);  
    }
    
    
   
    while($row5=$query5->fetch(PDO::FETCH_ASSOC))
    {
        if($row5['cv_answer']==null)
        {
            continue;
        }
        $pdf->Cell(60, 5,  ucfirst($row5['cv_question']).":", 0, 0, "R");
        $pdf->Cell(10,5,'',0);
        $pdf->Cell(60, 5,  iconv('UTF-8','windows-1252' , ucfirst($row5['cv_answer'])), 0, 0, "L");
        $pdf->Cell(10,5,'',0,1);
       //echo $row['cv_question']." ".$row['cv_answer']."<br/>";
    }
     $pdf->Output();
        break;
}

 

 
    
  
    
    
