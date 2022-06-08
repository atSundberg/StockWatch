<?php

class StockWatchDAO
{

   private $dbConn;
   private $tblName;

   public function __construct($tblName)
   {
      $this->dbConn = new SQLite3("../../StockWatch.db");
      $this->tblName = $tblName;
   }

   public function getColumns() {
      if ("Portfolio" == $this->tblName) {
         return $this->getColumnsPortfolio();
      } else if ("Stock" == $this->tblName) {
         return $this->getColumnsStock();
      } else if ("Account" == $this->tblName) {
         return $this->getColumnsAccount();
      } else if ("Bank" == $this->tblName) {
         return $this->getColumnsBank();
      } else if ("Transactions" == $this->tblName) {
         return $this->getColumnsTransactions();
      } else if ("Rates" == $this->tblName) {
         return $this->getColumnsRates();
      }
   }
   public function getRows() {
      if ("Portfolio" == $this->tblName) {
         return $this->dbConn->query($this->getSQLPortfolio());
      } else if ("Stock" == $this->tblName) {
         return $this->dbConn->query($this->getSQLStock());
      } else if ("Account" == $this->tblName) {
         return $this->dbConn->query($this->getSQLAccount());
      } else if ("Bank" == $this->tblName) {
         return $this->dbConn->query($this->getSQLBank());
      } else if ("Transactions" == $this->tblName) {
         return $this->dbConn->query($this->getSQLTransactions());
      } else if ("Rates" == $this->tblName) {
         return $this->dbConn->query($this->getSQLRates());
      }
   }

   public function getFormTitle () {
      if ("Stock" == $this->tblName) {
         return $this->getFormTitleStock();
      } else if ("Account" == $this->tblName) {
         return $this->getFormTitleAccount();
      } else if ("Bank" == $this->tblName) {
         return $this->getFormTitleBank();
      } else if ("Transactions" == $this->tblName) {
         return $this->getFormTitleTransaction();
      }
   }

   public function getForm () {
      if ("Stock" == $this->tblName) {
         return $this->getFormStock();
      } else if ("Account" == $this->tblName) {
         return $this->getFormAccount();
      } else if ("Bank" == $this->tblName) {
         return $this->getFormBank();
      } else if ("Transactions" == $this->tblName) {
         return $this->getFormTransaction();
      }
   }

   private function getSQLPortfolio() {
      return "SELECT * FROM Portfolio";
   }

   private function getSQLStock() {
      return "SELECT * FROM Stock";
   }

   private function getSQLAccount() {
      return "SELECT * FROM Account";
   }

   private function getSQLBank() {
      return "SELECT * FROM Bank";
   }

   private function getSQLTransactions() {
      return "SELECT * FROM Transactions";
   }

   private function getSQLRates() {
      return "SELECT * FROM Rates";
   }

   private function getColumnsPortfolio() {
      return array("Id", "Account Id", "Stock Id", "Amount");
   }

   private function getColumnsStock() {
      return array("Id", "Name", "Code", "Last Price");
   }

   private function getColumnsAccount() {
      return array("Id", "Bank Id", "Name");
   }

   private function getColumnsBank() {
      return array("Id", "Name");
   }

   private function getColumnsTransactions() {
      return array("Id", "Account Id", "Stock Id", "Buy/Sell", "Price", "Timestamp");
   }

   private function getColumnsRates() {
      return array("Id", "Stock Id", "Open", "High", "Low", "Close");
   }

   private function getFormTitleStock() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      Add a New Stock:
      </div>
      </div>";
   }

   private function getFormTitleBank() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      Add a New Bank:
      </div>
      </div>";
   }

   private function getFormTitleAccount(){
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      Add a New Account:
      </div>
      </div>";
   }
   private function getFormTitleTransaction() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      Add a New Transaction:
      </div>
      </div>";
   }

   private function getFormStock() {
      return "<div class=\"columns is-centered\">
         <div class=\"column is-one-third\">
         <div class=\"field\">
         <label class=\"label\">Name of Stock</label>
         <div class=\"control\">
         <input class=\"input\" type=\"text\" 
         placeholder=\"e.g Apple Inc.\">
         </div>
         </div>

         <div class=\"field\">
         <label class=\"label\">Stock Code</label>
         <div class=\"control\">
         <input class=\"input\" type=\"text\" 
         placeholder=\"e.g. AAPL\">
         </div>
         </div>

         <div class=\"field\">
         <label class=\"label\">Last Price</label>
         <div class=\"control\">
         <input class=\"input\" type=\"text\" 
         placeholder=\"e.g. 148.71\">
         </div>
         </div>
         
         <div class=\"field is-grouped is-grouped-right\">
         <div class=\"control\">
         <button class=\"button is-primary\">Add Stock</button>
         </div>
         </div>
         </div>
         </div>";
   }

   private function getFormBank() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      <div class=\"field\">
      <label class=\"label\">Name of Bank</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g Bank of China\">
      </div>
      </div>
      
      <div class=\"field is-grouped is-grouped-right\">
      <div class=\"control\">
      <button class=\"button is-primary\">Add Bank</button>
      </div>
      </div>
      </div>
      </div>";
   }

   private function getFormAccount() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      <div class=\"field\">
      <label class=\"label\">Name of Bank</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g Bank of China\">
      </div>
      </div>

      <div class=\"field\">
      <label class=\"label\">Name of Holder</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g. Hobbe\">
      </div>
      </div>
      
      <div class=\"field is-grouped is-grouped-right\">
      <div class=\"control\">
      <button class=\"button is-primary\">Add Account</button>
      </div>
      </div>
      </div>
      </div>";
   }

   private function getFormTransaction() {
      return "<div class=\"columns is-centered\">
      <div class=\"column is-one-third\">
      <div class=\"field\">
      <div class=\"control\">
      <label class=\"radio\">
      <input type=\"radio\" name=\"question\">
      Buy
      </label>
      <label class=\"radio\">
      <input type=\"radio\" name=\"question\">
      Sell
      </label>
      </div>
      </div>
      
      <div class=\"field\">
      <label class=\"label\">Account Holder</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g Hobbe.\">
      </div>
      </div>

      <div class=\"field\">
      <label class=\"label\">Stock Name</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g. Apple Inc.\">
      </div>
      </div>

      <div class=\"field\">
      <label class=\"label\">Price</label>
      <div class=\"control\">
      <input class=\"input\" type=\"text\" 
      placeholder=\"e.g. 146.52\">
      </div>
      </div>
      
      <div class=\"field is-grouped is-grouped-right\">
      <div class=\"control\">
      <button class=\"button is-primary\">Add Transaction</button>
      </div>
      </div>
      </div>
      </div>";
   }

  }