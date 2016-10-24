<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var types_data = google.visualization.arrayToDataTable([
          ['Types',      'Issues'],
          ['Security',         11],
          ['Sanitation',        2],
          ['Infrastructure',    7]
        ]);
        var issues_data = google.visualization.arrayToDataTable([
          ['Stats',      'Issues'],
          ['Open',             26],
          ['Waiting',           2],
          ['Closed',            7]
        ]);

        var replies_data = google.visualization.arrayToDataTable([
          ['Replies',      'Issues'],
          ['Open',             26],
          ['Replies',           2]
        ]);

        var types_options = {
          title: 'Types of Issues',
          is3D: false,
          pieHole: 0.3,

        };
        var issues_options = {
          title: 'Stats of Issues',
          is3D: false,
          pieHole: 0.3,

        };
        var replies_options = {
          title: 'Replies of Issues',
          is3D: false,
          pieHole: 0.3,

        };

        var type_chart = new google.visualization.PieChart(document.getElementById('types_charts'));
          var issue_chart = new google.visualization.PieChart(document.getElementById('issues_charts'));
            var replies_chart = new google.visualization.PieChart(document.getElementById('replies_charts'));
        type_chart.draw(types_data, types_options);
        issue_chart.draw(issues_data, issues_options);
        replies_chart.draw(replies_data, replies_options);
      }
    </script>

<div class="grid">
  <div class="width-medium-1-3">
  <div id="types_charts" style="max-width: 500px; height: 300px;"></div>
  </div>
    <div class="width-medium-1-3">
  <div id="issues_charts" style="max-width: 500px; height: 300px;"></div>
    </div>
      <div class="width-medium-1-3">
  <div id="replies_charts" style="max-width: 500px; height: 300px;"></div>
      </div>
</div>

<hr />

<h3>Issues List</h3>
<table class="table table-striped table-condensed">

    <thead>
        <tr>
            <th>...</th>

            <th>...</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td>...</td>

            <td>...</td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
        <tr>
            <td>...</td>
            <td>...</td>
        </tr>
    </tbody>
</table>
