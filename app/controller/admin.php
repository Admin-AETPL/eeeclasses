<?php
class Admin extends Controller
{
    public function index()
    {
        if (isset($_SESSION["admin"])) {
            $db = $this->model("select");
            $qry = "select count(stud_id) as total_students from eee_students";
            $data = $db->sel($qry);
            $qry1 = "select count(teacher_id) as total_teachers from eee_teachers";
            $data1 = $db->sel($qry1);
            $qry = "select count(sno) as total_quest from eee_question where status='unanswered'";
            $extra = $db->sel($qry);
            $qry1 = "select count(sno) as total_rev from eee_feedback where status='under review'";
            $more = $db->sel($qry1);
            $this->view('admin/header', $title = 'EEE Classes - Admin');
            $this->view('admin/sidebar');
            $this->view('admin/index', $title = $data1, $data, $extra, $more);
            $this->view('admin/footer');
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function login()
    {
        if (isset($_SESSION["admin"])) {
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/'</script>";
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function add_student()
    {
        if (isset($_SESSION["admin"])) {
            $this->view('admin/header', $title = 'EEE Classes - Admin');
            $this->view('admin/sidebar');
            $this->view('admin/add_student');
            $this->view('admin/footer');
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function students()
    {
        $cls = $_GET['cls'] ?? 'all'; // Get selected class or 'all' as default
        if (isset($_SESSION["admin"])) {
            if ($cls == '' || $cls == 'all') {
                $qry = "SELECT * FROM eee_students WHERE account_status='active'";
            } else {
                $qry = "SELECT * FROM eee_students WHERE stud_class='" . $cls . "' AND account_status='active'";
            }
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - View Students");
            $this->view('admin/sidebar');
            $this->view("admin/view_student", $title = '', $data); // Pass data to the view
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }

    public function delete_student($cls = '')
    {
        if (isset($_SESSION["admin"])) {
            if ($cls == '' || $cls == 'all') {
                $qry = "select * from eee_students where account_status='active'";
            } else {
                $qry = "select * from eee_students where stud_class='" . $cls . "' account_status='active'";
            }
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - Students Portal");
            $this->view('admin/sidebar');
            $this->view("admin/delete_student", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function update_student($cls = '')
    {
        if (isset($_SESSION["admin"])) {
            if ($cls == '' || $cls == 'all') {
                $qry = "select * from eee_students where account_status='active'";
            } else {
                $qry = "select * from eee_students where stud_class='" . $cls . "' account_status='active'";
            }
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - Students Portal");
            $this->view('admin/sidebar');
            $this->view("admin/update_student", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function add_teacher()
    {
        if (isset($_SESSION["admin"])) {
            $this->view('admin/header', $title = 'EEE Classes - Admin');
            $this->view('admin/sidebar');
            $this->view('admin/add_teacher');
            $this->view('admin/footer');
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function teachers($cls = '')
    {
        if (isset($_SESSION["admin"])) {
            $qry = "select * from eee_teachers where account_status='active'";
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - View Students");
            $this->view('admin/sidebar');
            $this->view("admin/view_teachers", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function delete_teacher($cls = '')
    {
        if (isset($_SESSION["admin"])) {
            $qry = "select * from eee_teachers where account_status='active'";
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes");
            $this->view('admin/sidebar');
            $this->view("admin/delete_teacher", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function update_teacher($cls = '')
    {
        if (isset($_SESSION["admin"])) {
            $qry = "select * from eee_teachers where account_status='active'";
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - Students Portal");
            $this->view('admin/sidebar');
            $this->view("admin/update_teacher", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function feedback()
    {
        if (isset($_SESSION["admin"])) {
            $qry = "select * from eee_feedback where status='under review'";
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - Reviews");
            $this->view('admin/sidebar');
            $this->view("admin/feedback", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
    public function question()
    {
        if (isset($_SESSION["admin"])) {
            $qry = "select * from eee_question where status='unanswered'";
            $db = $this->model("select");
            $data = $db->sel($qry);
            $this->view("admin/header", $title = "EEE Classes - Requests");
            $this->view('admin/sidebar');
            $this->view("admin/question", $title = '', $data);
            $this->view("admin/footer");
        } else {
            $this->view("admin/header", $title = "EEE Class - Admin Portal");
            $this->view("admin/login");
            $this->view("admin/footer");
        }
    }
}
