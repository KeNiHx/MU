<?php
    classAccount {
        public function __construct() {

        }
        public function register() {            
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($passward, $password2);
        }
        private function validateUsername($un) {

        }
        
        private function validateFirstName($fn) {
        
        }
        
        private function validateLastName($ln) {
        
        }
        
        private function validateEmails($em, $em2) {
        
        }
        
        private function validatePasswords($pw, $pw2) {
        
        }

    }
?>