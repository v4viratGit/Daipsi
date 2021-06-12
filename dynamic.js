// var subjects={
//     jee:['physics','chemistry','maths'],
//     neet:['physics','chemistry','botany','zoology'],
//     upsc:['commerce','histroy','apptitude']
// }
// var main=document.getElementById('main_menu');
// var sub=document.getElementById('sub_menu');
// main.addEventListener('change',function(){
// var selected_option=subjects[this.value];
// while(sub.options.length>0){
//     sub.options.remove(0);

// }
// Array.from(selected_option).forEach(function(el){
// let option=new option(el,el);
// sub.appendChild(option);
// });
// });

// var coursesByCategory = {
//     jee: ["physics", "chemistry", "maths"],
//     neet: ["physics", "chemistry", "botany", "zoology"],
//     upsc: ["commerce", "history"]
// }

//     function changecat(value) {
//         if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
//         else {
//             var catOptions = "";
//             for (categoryId in coursesByCategory[value]) {
//                 catOptions += "<option>" +coursesByCategory[value][categoryId] + "</option>";
//             }
//             document.getElementById("category").innerHTML = catOptions;
//         }
//     }

var coursesByCategory = {
    jee: [["courses:","jee mains","jee advanced"],["jeemains","physics","chemistry","mathematics"],["jeeadvanced","physics","chemistry","mathematics"]],
    neet: [["Neetsubjects","chemistry","biology","physics"]],
   upsc: [["","prelims","Mains","optional"],["prelims","general studies paper-I","general studies paper-II"],["Mains","one of the language selected by candidates(hindi)","General studies-I","General studies-II","General studies-III","General studies-IV","paper-I Essays","English"],["optional","optional subjects(Geography)","optional subjects(Hindi)"],
           ["Genralstudiespaper-I(prelims)","general issues on environmental ecology,biology & climate change","current events of national & international importance","Economic & social development","Indian policy & governance","Indian & world geography","general science"],
        ["Genralstudiespaper-II(prelims)","Interpersonal skills including communication skills","Basic numeracy, Data interpretation","Logical reasoning & analytical ability","Decision making & problem solving","General mental ability","Comprehension"],
    ["Generalstudies-I(Mains)","Indian Heritage and Culture","History and Geography of the World and Society"],
["Generalstudies-II(Mains)","International relations","Social Justice Constitution","Governance","Polity"],
["Generalstudies-III(Mains)","Security and Disaster Management","Economic Development","Bio diversity","Environment","Technology"],
["Generalstudies-IV(Mains)","Integrity and Aptitude","Ethics"]],
ca:[["","CA Intermediate","CA Foundation","CA Intermediate Subjects","Groups:-1","Groups:-2"],
["CAFoundationSubjects","Business Mathematics and Logical Reasoning and Statistics"," Business Laws and Business Correspondence and reporting","Business Economics and Business and Commercial","Principles and Practices of Accounting"],
["Group:-1(CAIntermediateSubjects)","Cost and Management Accounting","Corporate and other Laws","Accounting","Taxation"],
["Group:-2(CAIntermediateSubjects)","Enterprise Information System","Auditing and Assurance"," Economics for Finance","strategic management","finacial management","advance managment"]],
cs:[["","CS Executive","CSEET"],["CS_ExecutiveSubjects","Groups:-1","Groups:-2"],["CSEETSubjects","Current affairs and Presentation and communication skill","Legal aptitude and Logical Reasoning","Economic and Business Environment","Business Communication"],
["Group:-1(CSExecutiveSubjects)","Jurisprudence, Interpretation & General Laws","Setting up of Business Entities and Closure","Company Law Tax Laws"],
["Group:-2(CSExecutiveSubjects)","Economic, Business and Commercial Laws","Corporate & Management Accounting","Securities Laws & Capital Markets","finacial management","strategic management"]]

}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else 
        {
            var catOptions = "";
            for(var i=0;i<coursesByCategory[value].length;i++)
            {
              for(var j=0;j<coursesByCategory[value][i].length;j++)
              {
                  
                      if(j==0)
                      {
                          catOptions+="<optgroup label="+coursesByCategory[value][i][j]+">";
                      }
                      else if(j!=(coursesByCategory[value][i].length)-1){
                          catOptions+="<option>" +coursesByCategory[value][i][j] + "</option>";
                      }
                      else{
                          catOptions+="<option>" +coursesByCategory[value][i][j] + "</option></optgroup>";
                      }
                  
              }
            }
            
            document.getElementById("category").innerHTML = catOptions;
        }
    }

    