function onSemesterChanged()
{
    var semesterChanged = document.getElementById('semesterChangedFlag');
    semesterChanged.value = '1';
    
    var courseSelectionForm = document.getElementById('course-selection-form');
    courseSelectionForm.submit();
}


