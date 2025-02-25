@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('css/dashboard.css') }}" rel="stylesheet">
<script src="js/studypoints.js" defer></script>

<div class="container">
      <section id="courses">
        <h2>Studievoortgang</h2>
        <table>
          <thead>
            <tr>
              <th>Quarter</th>
              <th>Course</th>
              <th>Exams</th>
              <th>Grade</th>
              <th>EC</th>
              <th>Acties</th>
            </tr>
          </thead>
          <tbody>

          </tbody>

        </table>
      </section>

      <section id="nbsa">
        <h2>NBSA Overzicht</h2>
        <p>Houd je voortgang bij om te zien of je op schema ligt om voldoende EC te halen.</p>
        <p><strong>NBSA Grens:</strong> 45 EC</p>

        <!-- Voortgangsbalk -->
        <progress id="ecProgressBar" value="0" max="60"></progress>
        <p>Behaalde EC's: <span id="ecCount">0</span>/60</p>

        <!-- Voeg een waarschuwing toe als de grens niet is gehaald -->
        <p id="nbsaWarning" style="display: none; color: red;">Waarschuwing: Je ligt onder de NBSA-grens van 45 EC.</p>


        <!-- Course toevoegen formulier -->
        <button id="addCourseButton" class="btn">Voeg Course Toe</button>

        <div id="coursePopup" class="popup" style="display: none;">
          <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Voeg een nieuwe course toe</h2>
            <form id="addCourseForm">
              <label for="addCourseQuarter">Quarter:</label>
              <input type="text" id="addCourseQuarter" name="courseQuarter" required>

              <label for="addCourseName">Course Name:</label>
              <input type="text" id="addCourseName" name="courseName" required>

              <label for="addCourseExams">Exams:</label>
              <input type="text" id="addCourseExams" name="courseExams" required>

              <label for="addCourseGrade">Grade:</label>
              <input type="number" id="addCourseGrade" name="courseGrade" min="0" step="0.01">

              <label for="addCourseEC">EC:</label>
              <input type="number" id="addCourseEC" name="courseEC" min="0" step="0.01" required>

              <button type="submit" class="btn">Toevoegen</button>
            </form>
          </div>
        </div>

        <!-- Course bewerken formulier -->
        <div id="editCoursePopup" class="popup">
          <div class="popup-content">
            <span class="close close-edit">&times;</span>
            <form id="editCourseForm">
              <label for="editCourseQuarter">Quarter:</label>
              <input type="text" id="editCourseQuarter" required>

              <label for="editCourseName">Course Name:</label>
              <input type="text" id="editCourseName" required>

              <label for="editCourseExams">Exams:</label>
              <input type="text" id="editCourseExams" required>

              <label for="editCourseGrade">Grade:</label>
              <input type="number" id="editCourseGrade" min="0" step="0.01">

              <label for="editCourseEC">EC:</label>
              <input type="number" id="editCourseEC" min="0" step="0.01" required>

              <button type="submit" class="btn">Bewerken</button>
            </form>
          </div>
        </div>
      </section>
</div>
@endsection
