<script>

$event_id = $this->input->get('event_id') ? $this->input->get('event_id') : null;

$ev = "( SELECT ev.title, ev.start_date, ev.end_date, s.name from 
 {$this->db->dbprefix('md_events')} ev
        left JOIN " . $this->db->dbprefix('md_event_speakers') . ' es ON ev.id = es.event_id
        left join ' . $this->db->dbprefix('md_speakers') . ' s ON es.speaker_id = s.id ';
if ($start_date) {
                $start_date = $this->sma->fld($start_date);
                $end_date   = $end_date ? $this->sma->fld($end_date) : date('Y-m-d');
                $ev .= " ev.date >= '{$start_date}' AND ev.date < '{$end_date}' ";
                }
                $ev .= ' GROUP BY pp.event_id ) PCosts';
if ($pdf || $xls) {
    $this->db->select($this->db->dbprefix('md_event_registers'))
}




</script>