sqlite3 applicants.sqlite3 <<EOS
.mode csv
SELECT a, b, c FROM (SELECT COUNT(*) AS a, date(MIN(created_at),'weekday 1') AS b, workflow_state AS c, ROUND((julianday(created_at)-julianday('2015-01-01','weekday 1'))/7) AS d FROM applicants WHERE created_at >= date('2014-01-01') AND created_at <= date('2015-01-01') GROUP BY workflow_state, d) GROUP BY b, c;
EOS

