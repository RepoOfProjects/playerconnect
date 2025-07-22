<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Exam</title>
        <link rel="stylesheet" href="https://portal.vmedulife.com/student/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://portal.vmedulife.com/student/assets/css/mdb.min.css">
        <link rel="stylesheet" href="https://portal.vmedulife.com/student/assets/css/font-awesome.min.css">  
        <script src="https://portal.vmedulife.com/student/assets/js/jquery.min.js"></script>
        <script src="https://portal.vmedulife.com/student/assets/js/jquery-ui.min.js"></script>
        <script src="https://portal.vmedulife.com/student/assets/js/bootstrap.min.js"></script>
        <script src="https://portal.vmedulife.com/student/assets/js/mdb.min.js"></script>
        <script src="https://portal.vmedulife.com/student/assets/js/fontawesome-all.min.js"></script>
        <style>
            *{
                font-weight: 400;
            }
            .exam-header{
                background: #0000A0;
                height:10px;
            }
            #college-name
            {
                background: lightgrey;
                font-size:18px;
                font-weight: bold;
                display: flex;
                justify-content: center;
            }
            #basic-details-div{
                border-radius: 5px;
            }
            .question-container{
                margin-top:15px;
                display: flex;
                border: 1px solid lightgrey;
                border-radius:5px;
                padding: 20px;
            }
            .question-container > div{
                margin:10px;
            }
            .flag-unflag-btn{
                font-size:10px;
            }

            .answer-div{
                margin-top:10px;
            }
            .question-no-div{
                display: flex;
                justify-content: center;
                background:#4285F4;
                color:#ffffff;
                padding:5px;
                font-weight: bold;
                margin-bottom: unset;
            }
            .que-no-panel-btn{
                font-size: 10px;
            }
            .borderLeftThick{
                border-left: thick solid rgb(0, 0, 255);
            }
            .flag-question{
                background-color:red !important;
            }
            .flag-question:hover{
                background-color:red !important;
            }
            .unflag-question{
                background-color:white;
            }
            .answered-question{
                background-color:#00f500 ;
            }
            #que_no_panel{
                flex: 1;
            }
            #question-div{
                height: 65%;
                overflow:auto;
                flex:4;
            }
            .submit-btn{
                font-size: 11px;
                padding: .75rem 2.0rem;
                margin: unset;
                float:right;
            }
            .submit-hide-div{
                display:none;
            }

            /* Style the Image Used to Trigger the Modal */
            #image-content {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.3s;
            }


            /* The Modal (background) */
            #view-image {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1100 !important; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (Image) */
            #modal-content {
                margin: auto;
                display: block;
                width: 80%;
            }

            /* Add Animation - Zoom in the Modal */
            #modal-content, #caption {
                animation-name: zoom;
                animation-duration: 0.6s;
            }
            
			@keyframes zoom {
			  from {transform:scale(0)}
			  to {transform:scale(1)}
			}

			/* The Close Button */
			#close {
			  position: absolute;
			  top: 5%;
			  right: 5%;
			  color: #f1f1f1;
			  font-size: 40px;
			  font-weight: bold;
			  transition: 0.6s;
			  animation-name: zoom;
			  animation-duration: 0.6s;
			}

			#close:hover,
			#close:focus {
			  color: #bbb;
			  text-decoration: none;
			  cursor: pointer;
			}
  

			/* 100% Image Width on Smaller Screens */
			@media only screen and (max-width: 700px){
                #modal-content {
                    width: 100%;
                }
			}

            @media all and (max-width:500px)
            {
                .question-container{
                    display: flex;
                    flex-wrap: wrap;
                    flex-direction: column;
                    border: 1px solid lightgrey;
                    border-radius:5px;
                }
                #que_no_panel{
                    flex: 1;
                }
                #question-div{
                    order:2;
                    flex:1;
                }
                .break {
                    flex-basis: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-fluid exam-header mb-2">

        </div>
        <div class="container-fluid mb-2" id="college-name">

        </div>

        <div id="alert-div"></div>

        <div class="container list-group-item" id="basic-details-div">
            
        </div>

        <div class="container question-container" id="question-data-div">
            <div class="row" id="question-div">
                <div style="display:flex;justify-content:center;">
                    <img style="align-self: center;" src="https://portal.vmedulife.com/faculty/assets/images/Ring-Preloader/ring-preloader-32.gif">
                </div>
            </div>
            <div class="break"></div>
            <div class="row" id="que_no_panel">
            </div>
        </div>

        <div class = "col-md-12" id="toggle-div">
        </div>


        <div id="view-image" class="modal">
            <!-- The Close Button -->
            <div id="close" data-dismiss="modal">&times;</div>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="modal-content">
            <!-- Modal Caption (Image Text) -->
        </div>

        <!--  confirmation modal box 00 -->
        <div id="confirmation-modal" class="modal fade" aria-labelledby="confirmation-modal-label" aria-hidden="true" >
            <div class="modal-dialog" >
                <div class="modal-content">
                    <form method="POST" autocomplete="off" action="" data-toggle="validator" role="form" enctype="multipart/form-data">
                        <div class="modal-header" style="background-color: #c34141;color: #ffffff;">
                            <span class="modal-title" id="delete-component-title" style="font-size: 14px"><b><i class="fas fa-exclamation-triangle fa-2x"></i>&nbsp; Are you sure?</b></span><button type="button" class="close"  data-dismiss="modal" aria-label="Close" style="cursor: pointer;color:white; opacity:1;" onclick="closePopUpFromIframe();"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body" >&nbsp;
                            <input type="text" id="feeHeadId" value="" hidden>
                            <br>
                            <p style="font-weight:bold;">If you want to submit, please click on "YES" or else "NO" to continue with the exam.</p>
                        </div>

                        <div class="modal-footer"style="padding: 12px;">
                            <div style="display: flex;justify-content: flex-end;">
                                <a class="btn btn-grey" role="button" style="font-size: 11px" onclick="closeConfirmationModal()" data-dismiss="modal">No</a>
                                <a class="btn btn-green" role="button" style="font-size: 11px;margin: 5px;"  id="yes-btn" data-dismiss="modal">Yes</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- confirmation modal box 11 -->
    </body>
</html>
<script>
    let studentId = 138956;
    let examId = ;
    var user_details = {"data":{"account":"student","user_id":"STIICMCA22114","Acayear":"8","admissionYear":8,"DOB":"2001-05-27","EmailId":"siddhantamrutkar2@gmail.com","FirstName":"Siddhant","InstitudeId":162,"InstituteLogo":"https:\/\/s3.ap-south-1.amazonaws.com\/vmedulife-s3\/logo\/19-01-2021-LOGO-162-1611056236.png","InstituteName":"ATSS's Institute of Industrial & Computer Management & Research, Nigdi, Pune","InstituteShortName":"IICMR","InstituteUrl":"iicmr-mca-pune","LastName":"Amrutkar","MobileNumber":"9653364607","PRNno":"","PlStream":"","Points":0,"UserDp":"https:\/\/s3.ap-south-1.amazonaws.com\/vmedulife-s3\/dp\/6375e90b1d63a.jpeg","stuid":138956,"academicYear":"2022-23"},"role":"learner","success":"true"};
    let examDetails = {};
    let filteredQueList = {};
    let inputQueObj = {};
    let sortedQuestionIdArray = []; //Stores question id in order of its occurence
    let min = 0;
    let sec = 60;
    var configuration={};
    var originalConfigurationData = {};
    var configurationFlag ="";
    var totalObtainedScore = 0;
    var finalPerformanceArray = [];
    var remainingTime = "";

    window.onload = () =>{
        restrictActivities();
        getGroupwiseStudentAssignedOnlineExams();
    }


    let restrictActivities = () => {
        //Preventing copy paste
        $('body').bind('copy paste',function(e) {
            e.preventDefault(); return false; 
        });
        //Prevent right click
        document.addEventListener('contextmenu', event => event.preventDefault());

        //Preventing usage of f5 button
        function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
        $(document).on("keydown", disableF5);
    }


    let setBasicDetails = () => {
        $('#college-name').html(user_details["data"]["InstituteName"]);
        //create configurationHTML
        let configurationHTML = ""
        
        if(configurationFlag == "enable")
        {            
            let index = 0;
            for(setMarks in configuration)
            {
                if(index != 0)
                {
                    configurationHTML+= ` | `;
                }
                let {totalNoOfQuestions,displayQuestions,compulsoryQuestions} = configuration[setMarks];
                configurationHTML+= `<span><span class="bold">${setMarks} Marks</span> Total ${displayQuestions}, Compulsory ${compulsoryQuestions}</span>`;
                index++;
            }
            
        }
        let { examName,examSyllabus,negativeMarking,examAccessStatus,startTime,endTime,
                    startExamLink,allowStartExam,duration,examMarks,examStartDate,examEndDate,strictMode,startTimeUnFormatted,endTimeUnFormatted } =  examDetails['data'][examId];

        let negativeMarkingSystem = negativeMarking == 1 ? '25%' : negativeMarking == 2 ? '33%' : negativeMarking == 3 ? '50%' : 'NA'; 
        let html = `
            <div class="row col-md-12"><b>Title: </b>${examName}</div>
            <div class="row col-md-12"><b>Syllabus: </b>${examSyllabus}</div>
            <div class="row">
                <span class="col-md-2 col-sm-4 col-xs-4"><b>Marks: </b>${examMarks}</span>
                <span class="col-md-2 col-sm-4 col-xs-4"><b>Negative Marking: </b>${negativeMarkingSystem}</span>
                <span class="col-md-2 col-sm-4 col-xs-4"><b>Duration: </b>${duration} minutes</span>
                <span class="col-md-3 col-sm-6 col-xs-6"><b>Access Start Time: </b>${startTime}</span>
                <span class="col-md-3 col-sm-6 col-xs-6"><b>Access End Time: </b>${endTime}</span>
            </div>
            <div class="row">
                <span class="col-md-3"><b>You started exam at: </b><span id="my-start-time"></span></span>
                <span class="col-md-5"><b>Remaining Time: </b> <span id="remaining-time"></span></span>
                <span class="col-md-4"><button class="btn btn-green submit-btn" onclick="openConfirmationModal();">Submit</button><span id="strict-mode-warning-div" style="float:right;padding:5px;"></span></span>
            </div>
            <div class="row col-md-12">${configurationHTML}</div>
        `;

        $('#basic-details-div').html(html);

        

        //Displaying exam start time
        var todaysDate = new Date();
        var hours = addZero(todaysDate.getHours());
        var minutes = addZero(todaysDate.getMinutes());
        

        if(strictMode == 'on')
        {
            $('#strict-mode-warning-div').html('Strict Mode');
            var startTimeArray = startTimeUnFormatted.split(':'); // split it at the colons
            var startTimeAsMinutes = parseInt(startTimeArray[0]) * 60 + parseInt(startTimeArray[1]); //Exam start time as minutes
            
            var endTimeArray = endTimeUnFormatted.split(':');
            var endTimeAsMinutes = parseInt(endTimeArray[0]) * 60 + parseInt(endTimeArray[1]) ; //Exam start time as minutes

            var studentStartTimeAsMinutes = parseInt(hours) * 60 + parseInt(minutes);
            

            var newExamDuration = startTimeAsMinutes + parseInt(duration);
            min = newExamDuration - studentStartTimeAsMinutes ;
            if (remainingTime == "" || remainingTime == null )
            {
                remainingTime = min*60;
            }
            else
            {
                min = remainingTime != "" ? parseInt(remainingTime/60) : 0;
            }

            if(min <= 0)
            {
                alert(`Time Up! Exam is accessible only for duration of ${duration} minutes from ${startTime}. Please contact subject incharge incase of any issue.`);
                window.location.href= "https://portal.vmedulife.com"+"/vmlogout.php";
                return;
            }
            setTimer(true);
        }
        else
        {
            min = parseInt(duration) - 1;
            if (remainingTime == "" || remainingTime == null)
            {
                remainingTime = min*60;
            }
            else
            {
                min = remainingTime != "" ? parseInt(remainingTime/60) : 0;
            }
            setTimer(false);
        }

    }

    
    let setTimer = (hasStrictMode) =>
    {
        // return;
        if (parseInt(sec) > 0)
        {
            sec = parseInt(sec) - 1;
            document.getElementById("remaining-time").innerHTML = "&nbsp;&nbsp;"+min+" Minutes ," + sec+" Seconds";
            tim = setTimeout("setTimer("+hasStrictMode+")", 1000);
        }
        else if (parseInt(sec) == 0) 
        {            
            min = parseInt(min) - 1;
            if ( (parseInt(min) == 0) && (parseInt(sec) == 0) ) 
            {
                sec = 60;
                f3();
            }
            else 
            {
                sec = 59;
                document.getElementById("remaining-time").innerHTML = "&nbsp;&nbsp;" + min + " Minutes ," + sec + " Seconds";
                tim = setTimeout("setTimer("+hasStrictMode+")", 1000);
                //function to save performance on every minute
                evaluateStudentPerformance("Auto-save");
            }
        }
        
        remainingTime = min*60+sec;
       
    }

    function f3() 
    {
        if(parseInt(sec) > 1)
        {
            sec = parseInt(sec) - 1;
            document.getElementById("remaining-time").innerHTML = "&nbsp;&nbsp;"+min+" Minutes ," + sec+" Seconds";
            setTimeout(function(){ f3(); }, 1000);
        }
        else
        {     
            displayMsg('submit-warning');
        }        
        remainingTime = min*60;
       
    }	

    let displayQuestion = questionId => {
        let element = document.getElementById('question-div');
        element.innerHTML = '';
        
        let { question,answers,marks,shuffle_answers } = filteredQueList[questionId];
        let queText = question['qText'] == '' ? '' : question['qText'];
        let queType = question['qType'];
        let queImage = question['qImage'];

        let queImageDiv = '';
        if(queImage != '')
        {
            queImageDiv = '<div class="col-md-12 col-sm-12 col-xs-12 p-3"><img src="'+queImage+'" style="width:250px;height:250px;cursor:pointer;" data-toggle="modal" data-target="#view-image" data-backdrop="static" id="image'+questionId+'" onclick="viewQuestionImage(this);" title="View image"/></div><br>';
        }

        let qTypeText = queType == 'SINGLE-CHOICE' ? 'Single correct' : 
        queType == 'MULTIPLE-CHOICE' ? 'Multiple correct' : 
        queType == 'TRUE-FALSE' ? 'True / False' : 
        queType == 'ONE-WORD' ? 'One word' : 
        queType == 'DESCRIPTIVE' ? 'Descriptive' : '';
        
        //Displaying question number
        let indexOfCurrQuestion = sortedQuestionIdArray.indexOf(parseInt(questionId)); //Index of current question in the stored array
        element.innerHTML += `<div class="list-group question-no-div">Question ${(indexOfCurrQuestion + 1) } out of ${sortedQuestionIdArray.length}</div>`;
            
        //Displaying flag/unflag button
        let flagUnflagBtnHtml = `
            <div align="right">
                <button class="btn btn-outline-warning waves-effect flag-unflag-btn" id="flag" onclick="toggleFlag(${questionId},&quot;flag&quot;)">Flag Question</button>
                <button class="btn btn-outline-success waves-effect flag-unflag-btn" id="unflag" onclick="toggleFlag(${questionId},&quot;unflag&quot;)">Unflag Question</button>
            </div>
        `;
        element.innerHTML += flagUnflagBtnHtml;

        let queDiv = `
        <div class="col-md-12 col-sm-12 col-xs-12 mb-2" style="background: #eaeaea;">
            <p style="text-align:left;"><b>Question No.</b> ${(indexOfCurrQuestion + 1) } &nbsp;&nbsp;&nbsp; <b>Question Type:</b> ${qTypeText}  &nbsp;&nbsp;&nbsp; <b>Marks: </b>${marks}</p>
        </div>
        <div class="col-md-12 mb-2 p-3" style="text-align:left;font-weight:bold;border: 1px solid #ececec;padding: 5px;background: #eaeaea;">
            ${queText}
            ${queImageDiv}
        </div>
        
        <br>`;

        element.innerHTML += queDiv;

        let answerDiv = '<div class="col-md-12 answer-div" style="text-align:left;">';
        for(let i = 0; i < answers.length; i++)
        {
            let ansId = answers[i]['aUID'];
            let ansText = answers[i]['aText'];
            let ansImage = answers[i]['aImage'];
            let ansImageDiv = '';
            if(ansImage != '')
            {
                ansImageDiv = '<img src="'+ansImage+'" style="width:250px;height:250px;cursor:pointer;" data-toggle="modal" data-target="#view-image" data-backdrop="static" id="image'+ansId+'" onclick="viewQuestionImage(this);"title="View image"/>';
            }
            if(queType == 'SINGLE-CHOICE' || queType == 'TRUE-FALSE')
            {
                let checked = '';
                if(inputQueObj[questionId]['ans'] !== '')
                {
                    if(inputQueObj[questionId]['ans'] == ansId){checked = 'checked'}
                }
                answerDiv += '<div class="col-md-12 col-sm-12 col-xs-12 p-3" style="border: 1px solid #ececec">'+
                '<div class="col-md-8 col-sm-12 col-xs-12"><input class="mr-2" '+checked+' type="radio" name="radio" style="cursor:pointer;" value="'+ansId+'" onclick="setUserInput(this,&quot;radio&quot;,'+questionId+')" ondblclick="on_ans_deselection(this,'+questionId+')">'+ansText+'</div>'+
                '<div class="col-md-4 col-sm-12 col-xs-12 p-2">'+ansImageDiv+'</div>'+
                '</div>';
            }
            else if(queType == 'MULTIPLE-CHOICE')
            {
                let checked = '';
                if(inputQueObj[questionId]['ans'] !== '')
                {
                    let data = inputQueObj[questionId]['ans'].split(',');
                    if(data.includes(ansId))
                    {
                        checked = 'checked';
                    }                
                }
                answerDiv += '<div class="col-md-12 col-sm-12 col-xs-12 p-3" style="border: 1px solid #ececec">'+
                '<div class="col-md-8 col-sm-12 col-xs-12"><input class="mr-2" '+checked+' type="checkbox" name="checkbox" style="cursor:pointer;" value="'+ansId+'" onchange="setUserInput(this,&quot;checkbox&quot;,'+questionId+')">'+ansText+'</div>'+
                '<div class="col-md-4 col-sm-12 col-xs-12 p-2">'+ansImageDiv+'</div>'+
                '</div>';
            }
            else if(queType == 'ONE-WORD')
            {
                answerDiv += '<div class="p-3"><input class="mr-2" type="text" maxlength="30" placeholder="Enter your answer here." oninput="setUserInput(this,&quot;text&quot;,'+questionId+')" value="'+inputQueObj[questionId]['ans']+'"></div>';
            }

        }
        if(queType == 'DESCRIPTIVE')
        {
            answerDiv += '<div class="p-3"><textarea style="resize:none;height:30%;" placeholder="Enter you answer here." oninput="setUserInput(this,&quot;text&quot;,'+questionId+')">'+inputQueObj[questionId]['ans']+'</textarea></div>';
        }

        answerDiv += '</div>';
        element.innerHTML += answerDiv;  

        
        displayButtons(questionId);

        //Removing class of borderLeftThick from every questions
        var questionPanelBtn = document.getElementsByClassName('que-no-panel-btn');
        for(var i = 0; i < questionPanelBtn.length; i++)
        {
            questionPanelBtn[i].classList.remove('borderLeftThick');
        }
        
        //Adding class of borderLeftThick to current question
        document.getElementById("queno"+questionId).classList.add('borderLeftThick');


    }

    let displayButtons = (queId) => {
        queId = parseInt(queId);
        let togglebtnDiv = document.getElementById('toggle-div');
        togglebtnDiv.innerHTML = '';
        let btnElement = '';
        let indexOfCurrQue = sortedQuestionIdArray.indexOf(queId); //Index of current question in the stored array
        let prevQueId = 0;
        let nextQueId = 0;
        if(indexOfCurrQue == sortedQuestionIdArray.length - 1)
        {
            prevQueId = sortedQuestionIdArray[indexOfCurrQue - 1];
            nextQueId = 0;
            //This means this question is the last question. Hence Previous and Submit button will be displayed
            btnElement = ''+
            '<div align="center" style="clear:both">'+
                '<input type="button" class="btn btn-primary" id="btnPrevious" value="<< Prev" onclick="displayQuestion('+prevQueId+')"/>'+
            '</div>';
        }
        else if(indexOfCurrQue == 0)
        {
            prevQueId = 0;
            nextQueId = sortedQuestionIdArray[indexOfCurrQue + 1];
            btnElement = ''+
            '<div align="center" style="clear:both">'+
                '<input type="button" class="btn btn-primary" id="btnNext" value="Next >>" onclick="displayQuestion('+nextQueId+')" />'+
            '</div>';
        }
        else
        {
            prevQueId = sortedQuestionIdArray[indexOfCurrQue - 1];
            nextQueId = sortedQuestionIdArray[indexOfCurrQue + 1];
            btnElement = ''+
            '<div align="center" style="clear:both">'+
                '<input type="button" class="btn btn-primary" id="btnPrevious" value="<< Prev" onclick="displayQuestion('+prevQueId+')"/>'+
                '<input type="button" class="btn btn-primary" id="btnNext" value="Next >>" onclick="displayQuestion('+nextQueId+')" />'+
            '</div>';
        }


        togglebtnDiv.innerHTML = btnElement;
    }

    let setUserInput = (element,type,queId) => {
        //setUserInput
        if(type == 'radio')
        {
            let ansId = element.value;
            inputQueObj[queId]['ans'] = ansId;
            document.getElementById('queno'+queId).classList.add('answered-question');
        }
        else if(type == 'checkbox')
        {
            let ansId = element.value;
            let data = inputQueObj[queId]['ans'];
            if(data !== '')
            {
                dataArray = data.split(',');
                if(element.checked)
                {
                    if(!dataArray.includes(ansId))
                    {
                        dataArray.push(ansId);
                    }
                }
                else
                {
                    if(dataArray.includes(ansId))
                    {
                        let index = dataArray.indexOf(ansId);
                        dataArray.splice(index,1);
                    }
                }
                inputQueObj[queId]['ans'] = dataArray.toString();
                
            }
            else
            {
                inputQueObj[queId]['ans'] = ansId;
                
            }
            //Adding/Removing question attempted/unattempted class on the question panel btn
            if(inputQueObj[queId]['ans'] == '')
            {
                document.getElementById('queno'+queId).classList.remove('answered-question');
            }
            else
            {
                document.getElementById('queno'+queId).classList.add('answered-question');
            }
        }
        else
        {
            inputQueObj[queId]['ans'] = htmlEntities(element.value);

            if(element.value == '')
            {
                document.getElementById('queno'+queId).classList.remove('answered-question');
            }
            else
            {
                document.getElementById('queno'+queId).classList.add('answered-question');
            }
        }
        document.getElementById('queno'+queId).classList.remove('flag-question');
    }

    let on_ans_deselection = (element, queId) =>{
        let ansId = element.value;
        inputQueObj[queId]['ans'] = '';
        element.checked = false;
        //Removing green btn class once user uncheck radio btn
        document.getElementById('queno'+queId).classList.remove('answered-question');
    }

    let evaluateStudentPerformance = (submissionType) => {
        totalObtainedScore = 0;
        var customConfiguration = JSON.parse(originalConfigurationData); //setting of assigning original configuration data to configuration to avoid issue on auto save
        let negativeMarking = examDetails["data"][examId]["negativeMarking"];
        let negativeMarkingSystem = negativeMarking == 1 ? 25 : negativeMarking == 2 ? 33 : negativeMarking == 3 ? 50 : 'NA'; 
        let questionCount =1;
        //Iterating through user answered question
        for(let questionId in inputQueObj)
        {
            inputQueObj[questionId]['marks'] = 0;
            let userEnteredAnswer = inputQueObj[questionId]['ans'];
            if(userEnteredAnswer == '')
            {
                inputQueObj[questionId]['status'] = 'i';
                // continue;
            }
            else
            {
                let { marks,answers,question } = filteredQueList[questionId];
                let qType = question['qType'];

                if(qType == 'SINGLE-CHOICE' || qType == 'TRUE-FALSE')
                {
                    userEnteredAnswer = parseInt(userEnteredAnswer);
                    let isCorrectAnsMarkedByUser = false;
                    answers.forEach(answer=>{
                        let currentAnswerId = parseInt(answer['aUID']);
                        if(currentAnswerId == userEnteredAnswer && (answer['aStatus'] == 'T'))
                        {
                            isCorrectAnsMarkedByUser = true;
                            if(configurationFlag == "enable")
                            { 
                                if(customConfiguration[marks] != undefined)
                                {
                                    //marks will be added only if compulsory q is more than 0
                                    if(customConfiguration[marks]['compulsoryQuestions'] >0)
                                    {
                                        totalObtainedScore += parseFloat(marks);
                                    }
                                    customConfiguration[marks]['compulsoryQuestions'] = customConfiguration[marks]['compulsoryQuestions'] - 1;
                                } 
                            }   
                            else{
                                totalObtainedScore += parseFloat(marks);
                            }
                            inputQueObj[questionId]['marks'] += parseFloat(marks);
                        }
                    });
                    if(isCorrectAnsMarkedByUser == false && negativeMarkingSystem !== 'NA')
                    {
                        //Checking if negative marking is applicable
                        let marksToBeDeducted = (parseFloat(marks) * negativeMarkingSystem) / 100;
                        totalObtainedScore -= parseFloat(marksToBeDeducted.toFixed(2));
                        inputQueObj[questionId]['marks'] -= parseFloat(marksToBeDeducted.toFixed(2));
                        
                    }
                    //Marking status of answer whether its correct or incorrect
                    if(isCorrectAnsMarkedByUser)
                    {
                        inputQueObj[questionId]['status'] = 'c';
                    }
                    else
                    {
                        inputQueObj[questionId]['status'] = 'i';
                    }
                }
                else if(qType == 'MULTIPLE-CHOICE')
                {
                    let userMarkedCorrectAnsCount = 0;
                    let originalQueCorrectAnsCount = 0;

                    //Storing correct answer id from answer array
                    let correctAnswersIdArray = [];
                    answers.forEach(answer=>{
                        if(answer['aStatus'] == 'T')
                        {
                            correctAnswersIdArray.push(answer['aUID']);
                        }
                    });
                    let userEnteredAnswerArray = userEnteredAnswer.split(',');
                    
                    correctAnswersIdArray.sort(function(a, b){return a - b}); //Sorting content in array in ascending order
                    userEnteredAnswerArray.sort(function(a, b){return a - b}); //Sorting content in array in ascending order

                    correctAnswersIdArray = JSON.stringify(correctAnswersIdArray);
                    userEnteredAnswerArray = JSON.stringify(userEnteredAnswerArray);


                    //If correct answer count marked by user  == total correct answer count for the answer
                    if(correctAnswersIdArray == userEnteredAnswerArray)
                    {
                        if(configurationFlag == "enable")
                        { 
                            if(customConfiguration[marks] != undefined)
                            {
                                //marks will be added only if compulsory q is more than 0
                                if(customConfiguration[marks]['compulsoryQuestions'] >0)
                                {
                                    totalObtainedScore += parseFloat(marks);
                                }
                                customConfiguration[marks]['compulsoryQuestions'] = customConfiguration[marks]['compulsoryQuestions'] - 1
                                // customConfiguration[marks]['compulsoryQuestions']--;
                            } 
                        }   
                        else{
                            totalObtainedScore += parseFloat(marks);
                        }
                        inputQueObj[questionId]['marks'] += parseFloat(marks);
                        inputQueObj[questionId]['status'] = 'c';
                    }
                    else if(negativeMarkingSystem !== 'NA')
                    {
                        //Checking if negative marking is applicable
                        let marksToBeDeducted = (parseFloat(marks) * negativeMarkingSystem) / 100;
                        totalObtainedScore -= parseFloat(marksToBeDeducted.toFixed(2));
                        inputQueObj[questionId]['marks'] -= parseFloat(marksToBeDeducted.toFixed(2));
                    }

                    //Marking status of answer whether its correct or incorrect
                    if(correctAnswersIdArray == userEnteredAnswerArray)
                    {
                        inputQueObj[questionId]['status'] = 'c';
                    }
                    else
                    {
                        inputQueObj[questionId]['status'] = 'i';
                    }

                }
                else if(qType == 'ONE-WORD')
                {
                    userEnteredAnswer = userEnteredAnswer.trim();
                    let correctAnswer = answers[0]['aText'].trim();
                    if(userEnteredAnswer.toLowerCase() == correctAnswer.toLowerCase())
                    {
                        if(configurationFlag == "enable")
                        { 
                            if(customConfiguration[marks] != undefined)
                            {
                                //marks will be added only if compulsory q is more than 0
                                if(customConfiguration[marks]['compulsoryQuestions'] >0)
                                {
                                    totalObtainedScore += parseFloat(marks);
                                }
                                customConfiguration[marks]['compulsoryQuestions'] = customConfiguration[marks]['compulsoryQuestions'] - 1
                                // customConfiguration[marks]['compulsoryQuestions']--;
                            } 
                        }   
                        else{
                            totalObtainedScore += parseFloat(marks);
                        }
                        inputQueObj[questionId]['marks'] += parseFloat(marks);
                    }
                    else if(negativeMarkingSystem !== 'NA')
                    {
                        //Checking if negative marking is applicable
                        let marksToBeDeducted = (parseFloat(marks) * negativeMarkingSystem) / 100;
                        totalObtainedScore -= parseFloat(marksToBeDeducted.toFixed(2));
                        inputQueObj[questionId]['marks'] -= parseFloat(marksToBeDeducted.toFixed(2));
                    }

                    //Marking status of answer whether its correct or incorrect
                    if(userEnteredAnswer.toLowerCase() == correctAnswer.toLowerCase())
                    {
                        inputQueObj[questionId]['status'] = 'c';
                    }
                    else
                    {
                        inputQueObj[questionId]['status'] = 'i';
                    }
                }
            }
        }
        submitOnlineExamScore(parseFloat(totalObtainedScore.toFixed(2)),submissionType);
    }

    function loadque_no_panel(questionListData)
    {        
       
        document.getElementById('que_no_panel').innerHTML = "";

        var qus_no_panel = "<form name='question_no_panel' >";
        for(i=0; i< sortedQuestionIdArray.length; i++ )
        {
            var qid = sortedQuestionIdArray[i];
            qus_no_panel+="<div id='queno"+qid+"' class='btn btn-outline-primary waves-effect que-no-panel-btn' align='left' onclick='displayQuestion("+qid+")'>"+(i+1)+"</div>";
        }
        qus_no_panel += "</form>";

        document.getElementById("que_no_panel").innerHTML = qus_no_panel;
        //color attempted questions
        //check if exam is auto loaded
        if(questionListData["isAutoSaved"] == "true")
        {
            //Removing class of borderLeftThick from every questions
            var questionPanelBtn = document.getElementsByClassName('que-no-panel-btn');
            for(var i = 0; i < questionPanelBtn.length; i++)
            {
                questionPanelBtn[i].classList.remove('answered-question');
            }            
        
            userSelection = JSON.parse(questionListData["userSelection"]);
            for(let i=0;i< userSelection.length;i++)
            {
                let questionId = userSelection[i]["q"];
                let ansId = userSelection[i]["a"].toString();
                if(ansId != "")
                {
                    //question is attempted change the color of button
                    //Adding class of answered-question to attempted question
                    document.getElementById("queno"+questionId).classList.add('answered-question');
                }
            }
        }
    }

    function toggleFlag(qid,toggleType)
    {
        if(toggleType == 'flag')
        {
            // document.getElementById('queno'+qid).style = 'background-color:red; border-left: thick solid rgb(0, 0, 255);color: white !important; font-size:10px;';
            document.getElementById('queno'+qid).classList.remove('unflag-question');
            document.getElementById('queno'+qid).classList.add('flag-question');
        }
        else
        {
            // document.getElementById('queno'+qid).style = 'background-color:unset;border-left: thick solid rgb(0, 0, 255);';
            document.getElementById('queno'+qid).classList.remove('flag-question');
            document.getElementById('queno'+qid).classList.add('unflag-question');
        }

        //Checking if question is answered
        if(inputQueObj[qid]['ans'] == '')
        {
            document.getElementById('queno'+qid).classList.remove('answered-question');
        }
        else
        {
            document.getElementById('queno'+qid).classList.add('answered-question');
        }
    }

    const openConfirmationModal = () => {
        $('#confirmation-modal').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#confirmation-modal').modal('show'); 
        var yesBtn = document.getElementById('yes-btn');
        yesBtn.disabled = true;
        yesBtn.setAttribute('onclick','submitOnlineExam()');
    }	



    //API Related Functions 00
    let getGroupwiseStudentAssignedOnlineExams = () =>
    {
        var inputParameters = {};
        inputParameters['sid'] = 0;
        inputParameters['groupId'] = 0;
        inputParameters['studentId'] = studentId;
        inputParameters['acayr'] = 0;
        inputParameters['offset'] = 0;
        inputParameters['limit'] = 1;
        inputParameters['examId'] = examId;
        inputParameters = JSON.stringify(inputParameters);


        let parameters = "getGroupwiseStudentAssignedOnlineExams=true&data="+inputParameters+"";
        let xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST", "https://portal.vmedulife.com/api/instructor/onlineExam.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(parameters);
        xmlhttp.onload = function()
        {
            if (xmlhttp.status === 200)
            {
                let response =  JSON.parse(xmlhttp.responseText);
                examDetails = response;
                
                getStudentAssignedOnlineExamQuestionList();
            }
        }
    }

    let getStudentAssignedOnlineExamQuestionList = () =>
    {
        var inputParameters = {};
        inputParameters['studentId'] = studentId;
        inputParameters['examId'] = examId;
        inputParameters = JSON.stringify(inputParameters);


        let parameters = "getStudentAssignedOnlineExamQuestionList=true&data="+inputParameters+"";
        let xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST", "https://portal.vmedulife.com/api/instructor/onlineExam.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(parameters);
        xmlhttp.onload = function()
        {
            if (xmlhttp.status === 200)
            {
                
                let response =  JSON.parse(xmlhttp.responseText);
                let data = response['data'];
                let shuffleQid = response['shuffleQid']; //Contains question id in shuffled / randomised way                
                originalConfigurationData = JSON.stringify(response['configuration']);
                configuration =  response['configuration'];
                configurationFlag = response['configurationFlag'];
                remainingTime  = response["remainingTime"];
                let status = response['status'];

                //if exam is submitted then do not load the questions
                if(status == 1)
                {
                    alert("You have already submitted this exam.");

                    //redirect to the previous page
                    window.history.back();
                }
                else
                {
                    setBasicDetails();
                    if(shuffleQid.length == 0)
                    {
                        $('#question-div').html('Question not available. Please contact respective subject faculty for any exam related concern.');
                        return;
                    }

                    //Getting random question from the array 'data' on the basis of dislayQuestionCount
                    let displayQuestionCount = examDetails['data'][examId]["displayQuestionNumber"];
                
                    for(var i = 0; i < shuffleQid.length; i++)
                    {
                        let qid = shuffleQid[i];
                        //Creating final object where users answer and its respective marks will be stored
                        sortedQuestionIdArray.push(parseInt(qid));
                        inputQueObj[qid] = {'ans' : "",'marks': 0,'status':""};

                        let { shuffle_answers,answers } = data[qid];
                        if(shuffle_answers == 0)
                        {
                            filteredQueList[qid] = data[qid];
                        }
                        else
                        {                    
                            //Shuffling answers if faculty has set shuffle_answers to 1 for the current question
                            data[qid]['answers'] = {};
                            data[qid]['answers'] = shuffleArray(answers);
                            filteredQueList[qid] = data[qid];
                        }
                    }

                    //if some questions are already saved then store their ans in inputQueObj
                    if(response["isAutoSaved"] == "true")
                    {
                        userSelection = JSON.parse(response["userSelection"]);
                        for(let i=0;i< userSelection.length;i++)
                        {
                            let questionId = userSelection[i]["q"];
                            let ansId = userSelection[i]["a"].toString();
                            inputQueObj[questionId]["ans"]  = ansId; 
                        }
                        //display started time to student
                        var tDate = new Date();
                        var hours = addZero(tDate.getHours());
                        var minutes = addZero(tDate.getMinutes());
                        $('#my-start-time').html(`${hours}:${minutes}`);
                    }
                    else
                    {
                        //Updating student exam start time on load of first question 00
                        //only first time loading
                        updateStudentOnlineExamStartTime();
                    }
                    loadque_no_panel(response);
                    displayQuestion(sortedQuestionIdArray[0]);
                }
            }
        }
    }

    let updateStudentOnlineExamStartTime = () =>
    {
        let { studentExamStartTime,strictMode } = examDetails["data"][examId];
        //Checking if student exam start time was already updated 00        
        if(studentExamStartTime !== '0000-00-00 00:00:00' && strictMode == 'on')
        {
            let date = new Date(examDetails["data"][examId]["studentExamStartTime"]);
            let hours = addZero(date.getHours());
            let minutes = addZero(date.getMinutes());
            $('#my-start-time').html(`${hours}:${minutes}`);
            return;
        }
        var todaysDate = new Date();
        var date = todaysDate.getDate();
        var month = todaysDate.getMonth() + 1;
        var year = todaysDate.getFullYear();
        var hours = addZero(todaysDate.getHours());
        var minutes = addZero(todaysDate.getMinutes());
        var seconds = addZero(todaysDate.getSeconds());
        var examStartTime = `${year}-${month}-${date} ${hours}:${minutes}:${seconds}`;
        var inputParameters = {};
        inputParameters['studentId'] = studentId;
        inputParameters['examId'] = examId;
        inputParameters['startTime'] = examStartTime;
        inputParameters['source'] = "WEB";
        inputParameters = JSON.stringify(inputParameters);


        $('#my-start-time').html(`${hours}:${minutes}`);


        let parameters = "updateStudentOnlineExamStartTime=true&data="+inputParameters+"";
        let xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST", "https://portal.vmedulife.com/api/instructor/onlineExam.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(parameters);
        xmlhttp.onload = function()
        {
            if (xmlhttp.status === 200)
            {
                let response =  JSON.parse(xmlhttp.responseText);
                examDetails["data"][examId]["studentExamStartTime"] = `${year}-${month}-${date} ${hours}:${minutes}:${seconds}`;
            }
        }
    }

    let submitOnlineExam = (submissionType) =>
    {
        closeConfirmationModal();
        //Checking if there is internet connection
        let isThereInternetConnection = checkInternetConnection();
        if(isThereInternetConnection == false)
        {
            setTimeout(function(){
                    console.log("waiting for 5 seconds");
                    submitOnlineExam();
            }, 5000);
            return;
        }
        evaluateStudentPerformance(submissionType);
        //let obtainedScore = evaluateStudentPerformance();
            // let { examMarks } = examDetails['data'][examId];
            // //If obtainedScore is greater than exam marks then obtained score will be equals to exam marks
            // obtainedScore = obtainedScore > parseFloat(examMarks) ? examMarks : obtainedScore;

            // //Iterating through user entered answers to get performance and convert it into array for storing in dB
            // let finalPerformanceArray = [];
            // for(let questionId in inputQueObj)
            // {
            //     let temp = {};
            //     temp['q'] = questionId;

            //     if(filteredQueList[questionId]["question"]["qType"] !== 'ONE-WORD')
            //     {
            //         var ansArray = inputQueObj[questionId]['ans'].split(',');
            //         temp['a'] = ansArray;
            //     }
            //     else
            //     {
            //         temp['a'] = [inputQueObj[questionId]['ans']];
            //     }
            //     //Setting answer status for final submission            
            //     temp['s'] = inputQueObj[questionId]['status'];
            //     finalPerformanceArray.push(temp);
            // }

            // var inputParameters = {};
            // inputParameters['studentId'] = studentId;
            // inputParameters['examId'] = examId;
            // inputParameters['performance'] = JSON.stringify(finalPerformanceArray);
            // inputParameters['score'] = obtainedScore;
            // inputParameters['submissionType'] = submissionType == undefined ? 'submit' :submissionType ;
            // inputParameters = JSON.stringify(inputParameters);

            // let parameters = "submitOnlineExam=true&data="+escape(inputParameters)+"";
            // let xmlhttp=new XMLHttpRequest();
            // xmlhttp.open("POST", "https://portal.vmedulife.com/api/instructor/onlineExam.php", true);
            // xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            // xmlhttp.send(parameters);
            // xmlhttp.onload = function()
            // {
            //     if (xmlhttp.status === 200)
            //     {
            //         let response =  JSON.parse(xmlhttp.responseText);
            //         if(response['status'] == 'success')
            //         {
            //             displayMsg('success');
            //         }
            //         else if(response['status'] == 'fail')
            //         {
            //             displayMsg('fail');
            //         }
            //         else
            //         {
            //             displayMsg('other');
            //         }
            //     }
            // }
        //
    }

    function submitOnlineExamScore(obtainedScore,submissionType)
    {
        let { examMarks } = examDetails['data'][examId];
        //If obtainedScore is greater than exam marks then obtained score will be equals to exam marks
        obtainedScore = obtainedScore > parseFloat(examMarks) ? examMarks : obtainedScore;

        //Iterating through user entered answers to get performance and convert it into array for storing in dB
         finalPerformanceArray = [];
        for(let questionId in inputQueObj)
        {
            let temp = {};
            temp['q'] = questionId;

            if(filteredQueList[questionId]["question"]["qType"] !== 'ONE-WORD')
            {
                var ansArray = inputQueObj[questionId]['ans'].split(',');
                temp['a'] = ansArray;
            }
            else
            {
                temp['a'] = [inputQueObj[questionId]['ans']];
            }
            //Setting answer status for final submission            
            temp['s'] = inputQueObj[questionId]['status'];
            finalPerformanceArray.push(temp);
        }

        var inputParameters = {};
        inputParameters['studentId'] = studentId;
        inputParameters['examId'] = examId;
        inputParameters['performance'] = JSON.stringify(finalPerformanceArray);
        inputParameters['score'] = obtainedScore;
        inputParameters['remainingTime'] = remainingTime;
        inputParameters['iid'] = 162;
        inputParameters['submissionType'] = submissionType == undefined ? 'submit' :submissionType ;
        inputParameters = JSON.stringify(inputParameters);

        let parameters = "submitOnlineExam=true&data="+escape(inputParameters)+"";
        let xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST", "https://portal.vmedulife.com/api/instructor/onlineExam.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send(parameters);
        xmlhttp.onload = function()
        {
            if (xmlhttp.status === 200 && submissionType != "Auto-save")
            {
                let response =  JSON.parse(xmlhttp.responseText);
                if(response['status'] == 'success')
                {
                    displayMsg('success');
                }
                else if(response['status'] == 'fail')
                {
                    displayMsg('fail');
                }
                else
                {
                    displayMsg('other');
                }
            }
        }
    }
    //API Related Functions 11


    //UTILITY FUNCTIONS 00
    function addZero(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    function htmlDecode(input){
        var e = document.createElement('textarea');
        e.innerHTML = input;
        // handle case of empty input
        return e.childNodes.length === 0 ? "" : e.childNodes[0].nodeValue;
    }
    function htmlEntities(str) {
        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }
    function stripHtml(html)
    {
        var tmp = document.createElement("DIV");
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || "";
    }
    function viewQuestionImage(element)
    {
        var imageSource = element.src;
        var imageDisplay = document.getElementById('modal-content');
        imageDisplay.src = imageSource;
    }
    function closeConfirmationModal()
    {
        $('#confirmation-modal').modal('hide');
    }

    function shuffleArray(array) {
        var currentIndex = array.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
    }

    let checkInternetConnection = () => {

        $('#basic-details-div').hide();
        $('#question-data-div').hide();
        $('#toggle-div').hide();
        $('#college-name').hide();

        let isThereActiveInternetConnection = true;
        let element = parent.document.getElementById('alert-div');
        //Checking if there is internet connection, if not, submitAssignment() will be called in every 5 seconds
        if(!window.navigator.onLine)
        {
            isThereActiveInternetConnection = false;
            //Try to resubmit the assignment after every 5 seconds
            element.innerHTML = `
            <div style='margin-top:12%; margin-left:20%;'>
                <span>

                    <a style='font-size: 25px; color: red;'>Submission Failed!<a></br></br><img style="align-self: center;" src="https://portal.vmedulife.com/faculty/assets/images/Ring-Preloader/ring-preloader-32.gif"><a style='font-size: 20px;'> processing again in 5 seconds..please wait</a>
                    <br>
                    <span style="font-size:16px;">Also please check your internet connection. Submission sometimes fails due to internet connectivity.</span>
                </span>
            </div>`;
        }
        return isThereActiveInternetConnection;
    }

    let displayMsg = (type) => {
        let element = parent.document.getElementById('alert-div');
        element.innerHTML = '';
        if(type == 'success')
        {
            element.innerHTML = `
            <div style='margin-top:12%; margin-left:20%;'>
                <span>
                    <a style='font-size: 25px; color: green;'>Exam Submitted Successfully !<a></br></br><img style="align-self: center;" src="https://portal.vmedulife.com/faculty/assets/images/Ring-Preloader/ring-preloader-32.gif">
                    <span style="font-size:16px;">Please wait...Redirecting to online exam list.</span>
                </span>
            </div>`;

            setTimeout(function(){
                    console.log("waiting for 5 seconds");
                    window.location.href= examDetails["data"][examId]["onlineExamListPageURL"];
            }, 5000);
            return;
        }
        else if(type == 'submit-warning')
        {
            $('#basic-details-div').hide();
            $('#question-data-div').hide();
            $('#toggle-div').hide();
            $('#college-name').hide();
            element.innerHTML = `
            <div style='margin-top:12%; margin-left:20%;'>
                <span>
                    <a style='font-size: 25px; color: orange;'>Time Up!<a></br></br><img style="align-self: center;" src="https://portal.vmedulife.com/faculty/assets/images/Ring-Preloader/ring-preloader-32.gif">
                    <span style="font-size:16px;">Please wait...Exam will be submitted automatically.</span>
                </span>
            </div>`;

            setTimeout(function(){
                    console.log("waiting for 3 seconds");
                    submitOnlineExam('timeup');
            }, 3000);
            return;
        }
        else
        {
            element.innerHTML = `
            <div style='margin-top:12%; margin-left:20%;'>
                <span>

                    <a style='font-size: 25px; color: red;'>Submission Failed!<a></br></br><img style="align-self: center;" src="https://portal.vmedulife.com/faculty/assets/images/Ring-Preloader/ring-preloader-32.gif"><a style='font-size: 20px;'> processing again in 5 seconds..please wait</a>
                    <br>
                    <span style="font-size:16px;">Also please check your internet connection. Submission sometimes fails due to internet connectivity.</span>
                </span>
            </div>`;
            setTimeout(function(){
                    console.log("waiting for 5 seconds");
                    submitOnlineExam();
            }, 5000);
            return;
        }
    }
</script>