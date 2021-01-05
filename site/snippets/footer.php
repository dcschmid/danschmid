  </main>
  <footer class="footer">
    <div class="footer__copyright">
      &copy;<?= date("Y"); ?> Daniel Schmid
    </div>
    <div class="footer__links">
      <?php snippet('footermenu') ?>
    </div>
  </footer>
  <?php echo mix('/js/main.js') ?>
</body>
</html>
