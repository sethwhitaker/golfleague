<?php namespace GolfLeague\Statistics\League;


interface LeagueStatistics {

    public function topFiveLowestScores();
    public function topFiveLowestScoresByYear($year);
    public function topFiveScoringAverageByYear($year);
    public function topFiveNetScoresByYear($year);
    public function mostSkinsByYear($year);
    public function totalEagles();
    public function totalBirdies();
    public function totalPars();
    public function totalBogeys();
    public function totalDoubles();
    public function totalOthers();

}