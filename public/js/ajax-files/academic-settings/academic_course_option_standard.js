/* ==========================================================================
 * Template: FLICKS Fullpack Admin Theme
 * ---------------------------------------------------------------------------
 * Author: FLICKS User Application Module JS
 * Date : 11/1/2017
 * ========================================================================== */

'use strict';
var AcademicCourseOptionStandard = function () {
    
    // =========================================================================
    // Get the base url
    // =========================================================================
    var getBaseURL = FlicksApp.getBaseURL();
    
    return {
     // =========================================================================
        // CONSTRUCTOR APP
        // =========================================================================
        init: function () {
            AcademicCourseOptionStandard.handleCalls();
        },
        
        
        // =========================================================================
        // FOR CALLS
        // =========================================================================
        handleCalls: function() {
            //-----  assign uuser applicato to category --- //
            $("#assignCourseOption").click(function(e){
                AcademicCourseOptionStandard.assignAcademicCourseOption();
            });
            
            $("#removeCourseOption").click(function(e){
                AcademicCourseOptionStandard.removeAcademicCourseOption();
            });
            
            
        },
        
        
    handleAcademicCourseOptionStandardData : function(){
      
                $(".list-academiccourseoptionstandard").dataTable().fnDestroy();
                var table = $('.list-academiccourseoptionstandard').DataTable({
//                    "processing": true,
//                    "serverSide": true,
                    'ajax': {
                    'url': getBaseURL + "/academic/academic-course-option-standard/all"
                    },
                    pageLength: 10,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        {extend: 'excel', title: 'AcademicCourseOptionStandardList'},
                        {extend: 'pdf', title: 'AcademicCourseOptionStandardList'},
                        {extend: 'print',
                            customize: function (win) {
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                            }
                        }
                    ],
                    "aoColumns" : [
                                {mData: "academic_course_option_standard"}, 
                                {mData: "academic_course_option_standard_code"},
                                {mData: "academic_course_option_standard_description"}, 
                                {"render": function (data, type, full, meta) {
                                        return full['department']['name'];
                                }},
                             {"render": function (data, type, full, meta) {
                                        return full['is_deleted'] == 0 ? '<span class="label label-primary"> Active</span>' : '<span class="label label-danger"> Inactive</span>';//full['icon']{0}['icon'];
                                }},
                                {"render": function (data, type, full, meta) { 
                                    return "<a class='btn btn-primary btn-xs btn-edit' type='button'><i class='fa fa-edit'></i></a>\n\
                                    <a class='btn btn-danger btn-xs' type='button'><i class='fa fa-remove'></i></a>"
                                },searchable:false,sortable:false}
                            ]

                });
                
                //---if edit ----- //
                $('.list-academiccourseoptionstandard tbody').on('click', '.btn-edit', function (e) {
                    var $row = $(this).closest('tr');
                    var data = table.row($row).data();
                    var editurl = getBaseURL + "/academic/academic-course-option-standard/" + data['id'] + "/edit";
                    
                    FlicksApp.handleRequestData(editurl,'edit');

                });
        },     
        
         // =========================================================================
        // Allot Academic Course Option to Academic Level
        // =========================================================================
    assignAcademicCourseOption : function(){
    
            var academic_level_id = $("#academic_level").val();
            if (academic_level_id === "0" || (Math.floor(academic_level_id) != academic_level_id)) {
                FlicksApp.render_msg("Select Programme Option", "academic_level", '0');
                return;
            }
             FlicksApp.clear_diverror();
            //--------- validate unassigned checkbox ---------
            var chkArrayUnassign = [];
            $(".unassignchk:checked").each(function () {
                chkArrayUnassign.push($(this).val());
            });
            var SelectedUnassign;
            SelectedUnassign = chkArrayUnassign.join(',') + ",";
            SelectedUnassign = SelectedUnassign.slice(0, -1);

            if (SelectedUnassign.length <= 0) {
                FlicksApp.render_msg("Please select at least academic course option to assign", '', '0');
                return;
            }
                
            $.ajax({
                url: getBaseURL + "/academic/academic-course-option-standard/allot-group",
                data: {academic_level_id: academic_level_id, SelectedUnassign: SelectedUnassign},
                type: 'POST',
                dataType: "json",
                beforeSend: function () {
                },
                complete: function () {
                },

            success: function(data) { 
                AcademicCourseOptionStandard.loadAcademicCourseOption();
                if(data.status === 1)
                    FlicksApp.render_msg(data.msg,'','1');
                else
                    FlicksApp.render_msg(data.msg,'','0');
            },
            error: function(e, f, g) {
                FlicksApp.handleAjaxError(e + f + g)
           
                }
            });
        },
        
        
        // =========================================================================
        // Remove Academic Course Option from Academic Level
        // =========================================================================
        removeAcademicCourseOption : function(){
            
            var academic_level_id = $("#academic_level").val();
            if (academic_level_id === "0" || (Math.floor(academic_level_id) != academic_level_id)) {
                FlicksApp.render_msg("Select Programme Option", "academic_level", '0');
                return;
            }           
            FlicksApp.clear_diverror();
                        //--------- validate assigned checkbox ---------
            var chkArrayAssigned = [];
            $(".assignchk:checked").each(function () {
                chkArrayAssigned.push($(this).val());
            });
            var SelectedAssigned;
            SelectedAssigned = chkArrayAssigned.join(',') + ",";
            SelectedAssigned = SelectedAssigned.slice(0, -1);

            if (SelectedAssigned.length <= 0) {
                FlicksApp.render_msg("Please select at least one programme option to remove", '', '0');
                return;
            }
            $.ajax({
            url: getBaseURL + "/academic/academic-course-option-standard/remove-group",
            data: {academic_level_id:academic_level_id,SelectedAssigned:SelectedAssigned},
            type: 'POST',
            dataType: "json",
            beforeSend: function() {},
            complete: function() {},
            success: function(data) {
                AcademicCourseOptionStandard.loadAcademicCourseOption();
                if(data.status === 1)
                    FlicksApp.render_msg(data.msg,'','1');
                else
                    FlicksApp.render_msg(data.msg,'','0');
            },
            error: function(e, f, g) {
                FlicksApp.handleAjaxError(e + f + g)
            }
        });
        },
        
        
        // =========================================================================
        // Populate Academic Course Option
        // =========================================================================
        //------------ Load Academic Course Option ---------- //
        loadAcademicCourseOption : function(){ 
            
            FlicksApp.clear_diverror();//-------- clear error div ---- //
            var academic_level_id = $("#academic_level").val();
            $.ajax({
                url: getBaseURL + "/academic/academic-course-option-standard/load-group",
                data: {academic_level_id:academic_level_id},
                type: 'POST',
                dataType: "json",
                beforeSend: function() {},
                complete: function() {},
                success: function(data) {

                    //--------- for unassigned -------
                    $("#list-unassigned").dataTable().fnDestroy();
                    var oTable1 = $('#list-unassigned').dataTable( {
                        "iDisplayLength": 6,
                        "bAutoWidth": false,
                        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                        "aaData" : data.unassigned,
                        "aoColumns" : [
                                        { mData : "sno", "sortable": false, "class": "center" },
                                        { mData : "tname" },
                                    ]
                        } );

                    //--------- for assigned -------
                    $("#list-assigned").dataTable().fnDestroy();
                    var oTable2 = $('#list-assigned').dataTable( {
                        "iDisplayLength": 6,
                        "bAutoWidth": false,
                        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                        "aaData" : data.assigned,
                        "aoColumns" : [
                                        { mData : "sno", "sortable": false, "class": "center" },
                                        { mData : "tname" },
                                    ]
                        } );
                },
                error: function(e, f, g) {
                    ajaxError(e, f, g);
                }
            });
        },
    
            };
}();

// Call User Application Module
AcademicCourseOptionStandard.init();