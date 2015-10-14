SELECT
  g1.id,
  g1.match_id,
  g1.team_id AS my_team_id,
  g2.team_id AS opponent_id,
  g1.score AS my_score,
  g2.score AS opponent_score,
  m.date
FROM `games` as g1
  LEFT JOIN `games` as g2
    ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id
  LEFT JOIN matches as m
  ON m.id = g1.match_id;

-- SELECTING THE BEST TEAM...

SELECT
  results.id,
  results.my_team_id,
  t.name,
  SUM(CASE WHEN (results.my_score > results.opponent_score) THEN 1 ELSE 0 END) AS win,
  SUM(CASE WHEN (results.my_score < results.opponent_score) THEN 1 ELSE 0 END) AS loss
FROM (
      SELECT
        g1.id,
        g1.match_id,
        g1.team_id AS my_team_id,
        g2.team_id AS opponent_id,
        g1.score AS my_score,
        g2.score AS opponent_score
      FROM `games` AS g1
        LEFT JOIN `games` AS g2
          ON g2.match_id = g1.match_id AND g1.team_id <> g2.team_id
     ) AS results
LEFT JOIN `team` as t
  ON t.id = results.my_team_id
GROUP BY results.my_team_id ORDER BY win DESC;


-- SELECTING THE BEST PLAYER

SELECT
  player_id,
  u.first_name,
  SUM(`value`) AS total,
  AVG(`value`) AS ave
FROM `games_scoresheet` AS gs
  LEFT JOIN users AS u
  ON u.id = gs.player_id

WHERE `key` = 'score' GROUP BY `player_id` ORDER BY total DESC;