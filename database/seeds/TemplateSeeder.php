<?php

use Illuminate\Database\Seeder;
use App\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** first template */
        Template::create([
            'title'=>'default template',
            'description'=>'first default template for syllabi builder',
            'department_id'=>'1',
            'syllabus_id'=>'1',
            'template'=>'<body>
            <p><i>
            This template contains selected elements of an effective syllabus, as well as recommended language related to University policies and resources for students.  This template is meant to be adaptable across a wide range of courses and disciplines. Content should be customized to fit the course, but language may be directly copied from this document (particularly recommended for the “Resources for Students” section).
            </i>
            </p>
            <center>
            <h1>Course Title</h1>
            <h2>Department, Course Number, and Section<br>
            Class Meeting Time(s) and Location(s)
            <br>
            Semester
            </h2>
            </center>
            <h3>
            Instructor(s) name(s) and contact information, e.g. 
            <br>
            Email address						<br>
            Office location; phone<br>
            Office hours
            
            </h3>
            <p style="color:blue">
            [
            Instructors may want to indicate which is their preferred mode of contact (email, phone, etc), as well as when and how students can expect a reply to any electronic communication.]
            <br>
            [
            Consider adding contact Information for graduate students, staff, or other individuals providing course support here, or on a separate document.]
            </p>
            
            <h4><i>Course Description</i></h4>
            <p style="color:blue">
            [
            Insert description from Course Listings, or an expanded version. Along with the topic of your course, the description may also include information about what type of course it is (e.g. lab, studio, discussion- based seminar, writing-intensive, multidisciplinary, etc.) as well as particular pedagogical strategies required (group work, fieldwork, etc.). List any course prerequisites. ]
            
            
            
            </p>
            
            <h4>Course Goals</h4>
            <p>Students who complete this course successfully will be able to: </p>
            <p style="color:blue;">
            [
            Consider listing 4-6 “big picture,” student-centered course goals or learning objectives– What should your students learn or be able to do as a result of participating successfully in your course? Some instructors prefer to list course goals elsewhere, such as on Blackboard or in another document.]
            </p>
            
            <h5><i>Required Texts, Materials, or Equipment</i></h5>
            <p style="color:blue;">
            •	List required texts, titles, and authors, as well as edition.
            <br>
            •	List any required materials or equipment (e.g. lab notebook, specific calculator, etc).
            <br>
            •	Include a note about where to obtain these materials.
            <br>
            •	Include a note about any electronically-available content posted on Blackboard, library reserves (ARES), or course website, for example. 
            </p>
            <h4>Daily Work/Homework</h4>
            <p style="color:blue;">
            [
            Briefly describe what students will be required to do to prepare for class and/or to complete weekly homework and problem set assignments.]
            </p>
            <h4>Major Assignments: Descriptions</h4>
            <p style="color:blue;">
             [
             Include a brief description of each of the graded components in enough detail that a student reading the syllabus will have a good general understanding of the amount and type of required work.]</p>
             <h4>Class Participation</h4>
            <p style="color:blue;">
            [
            Describe the function of student participation within the course, as well as your expectations for how students should participate in class. This information should include whether participation is required, how it is assessed, etc. 
            Consider including a statement indicating that all interactions in class will be civil, respectful, and supportive of an inclusive learning environment for all students. Encourage students to speak to you, the department chair, or an advisor, about any concerns they may have about classroom participation and classroom dynamics.]
            </p>
            <h4>
             Course Grading</h4>
             <p> <i>Statement of Grading Approach or Philosophy</i></p>
             <p style="color:blue;">
              [
              For example, are major assignments or exams grading on a curve? Will exams be graded anonymously? Will a “curve” be applied when grades are tabulated?]</p>
              <p><i>Explanation of Grading System</i></p>
              <p style="color:blue;">
              Include assignments, exams, presentations, etc.  that together determine the final grade for the course, with a clear indication of the value of each. If relevant, include grade cut-offs or other information. Examples are included below]
              </p>
              <p>
              •	Paper/Exam 1: % of total grade or maximum points
              <br>
            •	Paper/Exam 2: % of total grade or maximum points<br>
            •	Paper/Exam 3: % of total grade or maximum points<br>
            •	Paper/Exam 4: % of total grade or maximum points
            OR<br>
            •	Exams = XXX points
            <br>
            •	Homework = XXX points
            <br>
            •	Class Participation = XXX points
            <br>
            Sample Grade Cutoffs
                <br>
                90%	A
                <br>
                80% 	B
                <br>
                70%	C
            </p>
              
              <h4>
              Course-Specific Support or Supplementary Instruction</h4>
              <p style="color:blue;">
              Include recitations, help sessions, Peer-Led Team Learning, office hours, opportunities to seek help from Peer Mentors at Cornerstone, etc. </p>
              <h4><i>Course Policies and Information for Students</i></h4>
              <p>INCLUSIVE LEARNING ENVIRONMENT STATEMENT</p>
              <p style="color:blue;">
              Suggested syllabus statement on inclusive learning environment; Developed by WUSTL Standing Committee on Facilitating Inclusive Classrooms, 2016</p>
              <p>
              The best learning environment––whether in the classroom, studio, laboratory, or fieldwork site––is one in which all members feel respected while being productively challenged. At Washington University in St. Louis, we are dedicated to fostering an inclusive atmosphere, in which all participants can contribute, explore, and challenge their own ideas as well as those of others. Every participant has an active responsibility to foster a climate of intellectual stimulation, openness, and respect for diverse perspectives, questions, personal backgrounds, abilities, and experiences, although instructors bear primary responsibility for its maintenance.
            A range of resources is available to those who perceive a learning environment as lacking inclusivity, as defined in the preceding paragraph. If possible, we encourage students to speak directly with their instructor about any suggestions or concerns they have regarding a particular instructional space or situation. Alternatively, students may bring concerns to another trusted advisor or administrator (such as an academic advisor, mentor, department chair, or dean). All classroom participants––including faculty, staff, and students––who observe a bias incident affecting a student may also file a report (whether personally or anonymously) utilizing the online Bias Report and Support System
            </p>
            
            <h4>
            Preliminary Schedule of Topics, Readings, and Assignments</h4>
            <p style="color:blue;">
            [Include dates you plan to cover specific topics (with reading assignments), the due dates for major assignments, and the due date for the final exam. Consult relevant academic calendars and keep in mind religious holidays and significant campus events.]</p>
            <table border=1>
            <tr>
            <th>Date</th>
            <th>Topics</th>
            <th>Assigned Readings</th>
            <th>HomeWork</th>
            <th>Major Assignments and Deadlines</th>
            </tr>
            <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </table>
            </body>'
          ]);


          Template::create([
            'title'=>'second template',
            'description'=>'second default template for syllabi builder',
            'department_id'=>'1',
            'syllabus_id'=>'1',
            'template'=>'<body>
            <h1>University of [Name]</h1>
            <h2>College/Department<br>
            Course Number, Course Title, Section, Semester and Year</h2>
            
            <br>
            <h6>
            Instructor:
            <br>
            Office Location:
            <br>
            Telephone:
            <br>
            Email:
            <br>
            office Hours:
            <br>
            Class Days/Time:
            <br>
            Classroom:
            <br>
            Prerequisites:
            <br>
            General Education Student Learning 
            <br>
            Outcomes:
            </h6>
            <br>
            <h4>Course Description</h4>
            <br>
            <h4>Course Goals</h4>
            <br>
            <h4>
            Student Learning Outcomes</h4>
            <br>
            <h4>
            Upon successful completion of this course, each student will be able to:
            </h4>
            <br>
            <h4>Required Texts/Readings 
            Textbook
            </h4>
            <br>
            <h4>Other Readings</h4>
            <br>
            <h4>
            Other equipment / material requirements (optional)
            
            </h4>
            <br>
            <h4>
            
            Assignments and Grading Policy
            </h4>
            <p>
            A 94-100
            <br>
            A- 90-93 
            <br>
            B+ 87-89 
            <br>
            B 83-86 
            <br>
            B- 80-82 
            <br>
            C+ 77-79 
            <br>
            C 73-76 
            <br>
            C- 70-72 
            <br>
            D+ 67-69 
            <br>
            D 60-66 
            <br>
            F <60) 
            </p>
            <br>
            <h4>INSTRUCTOR POLICIES 
            
            
            </h4>
            <br>
            <h5>Classromm Protocol</h5>
            <br>
            <h4>Course Number / Title, Semester, Course Schedule</h4>
            <br>
            <h5>Table 1 Course Schedule</h5>
            <table border=1>
            <tr>
            <th>Week</th>
            <th>Date</th>
            <th>Topic</th>
            <th>Readings</th>
            <th>Assignments</th>
            <th>Due Dates</th>
            <th>Deadlines</th>
            </tr>
            <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>14</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td>Final Exam</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
            </table>
            
            
            </body>'
          ]);
          Template::create([
            'title'=>'third template',
            'description'=>'third default template for syllabi builder',
            'department_id'=>'1',
            'syllabus_id'=>'1',
            'template'=>'<html>
            <head>
            
            <style>
            table {
              border-collapse: collapse;
              width: 100%;
            }
            
            th, td {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid #ddd;
            }
            th {color: darkred;}
            </style>
            
            </head>
            <body>
            
            <h2 style="color:darkred;">
            [Course Name] Syllabus
            </h2>
            
            <h4>[Semester and Year]</h4>
            <h4><br><br>Instructor Information</h4>
            <h6>
            <p style="color:darkred;">
            &nbsp &nbsp &nbsp Instructor	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp Email	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Office Location & Hours
            </p>
            <p>
            [Instructor Name]	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp [Email address]	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp [Location, Hours, Days]
            </p>
            </h6>
            <br>
            <h4>General Information</h4>
            <h6>
            <p style="color:darkred;">
            <b>Description</b></p>
            [To replace the placeholder text on this page, just select a line of text and start typing.]
            <br>
            <p style="color:darkred;"><b>Expectations and Goals</b></p>
            [But don’t replace the placeholder text just yet! First check out a few tips to help you quickly format your report. You might be amazed at how easy it is.]
            
            </h6>
            
            <br>
            <h4>Course Materials</h4>
            <h6>
            <p style="color:darkred;"><b>
            Required Materials</b></p>
            [Need a heading? On the Home tab, in the Styles gallery, just tap the heading style you want.]<br>
            	[Notice other styles in that gallery as well, such as for a numbered list, or a bulleted list like this one.]<br>
            	[For best results when selecting text to copy or edit, don’t include space to the right of the characters in your selection.]
            
            <p style="color:darkred;">
            <b>Optional Materials</b></p>
            Want to add more tables to your document that look like the Course Schedule and Exam Schedule tables that follow? Nothing could be easier. On the Insert tab, just select Table to add a new table and then select the custom formatting you want from the Table Tools Design tab.]
            
            <p style="color:darkred;"><b>Required Text</b></p>
            <b>[Item Name 1]</b> [Media Type 1], [Author Name 1]<br>
            <b>[Item Name 2]</b> [Media Type 2], [Author Name 2]
            </h6>
            <br>
            <h4>Course Schedule</h4>
            <table>
              <tr>
                <th>Week</th>
                <th>Topic</th>
              <th>Reading</th>
              <th> Exercises</th>
              </tr>
              <tr>
                <td>[Week 1]</td>
                <td>[Topic 1]</td>
                <td>[Reading 1]</td>
                <td>[Exercise 1]</td>
              </tr>
              <tr>
               <td>[Week 2]</td>
                <td>[Topic 2]</td>
                <td>[Reading 2]</td>
                <td>[Exercise 2]</td>
              </tr>
              <tr>
                <td>[Week 3]</td>
                <td>[Topic 3]</td>
                <td>[Reading 3]</td>
                <td>[Exercise 3]</td>
              </tr>
              <tr>
                <td>[Week 4]</td>
                <td>[Topic 4]</td>
                <td>[Reading 4]</td>
                <td>[Exercise 4]</td>
              </tr>
            </table>
            
            <br>
            <h4>Exam Schedule</h4>
            <table>
            <tr>
            <th>Date</th>
            <th>Subject</th>
            </tr>
            <tr>
            <td><b>[Date 1]</b></td>
            <td>[Subject 1]</td>
            </tr>
            <tr>
            <td><b>[Date 2]</b></td>
            <td>[Subject 2]</td>
            </tr>
            </table>
            
            
            <br>
            <h4>Additional Information and Resources</h4>
            <h6>
            <p style="color:darkred;"><b>[Look Great Every Time]</b></p>
            [To replace this placeholder text, just select the line of text and start typing]
            </h6>
            <br>
            <br>
            <br>
            </body>
            </html>'
          ]);
        }
}
