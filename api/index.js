const { exec } = require('child_process');

module.exports = (req, res) => {
  exec('php /sjxjj.php', (error, stdout, stderr) => {
    if (error) {
      res.status(500).send(`Error: ${error.message}`);
      return;
    }
    if (stderr) {
      res.status(500).send(`Stderr: ${stderr}`);
      return;
    }
    res.send(stdout);
  });
};
