sqlite3 applicants.sqlite3 <<EOS
.mode csv
SELECT a, b, c FROM (SELECT COUNT(*) AS a, date(MIN(created_at),'weekday 1') AS b, workflow_state AS c, ROUND((julianday(created_at)-julianday('$1','weekday 1'))/7) AS d FROM applicants WHERE created_at >= date('$1') AND created_at <= date('$2') GROUP BY workflow_state, d) GROUP BY b, c;
EOS

