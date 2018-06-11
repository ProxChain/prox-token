var ProxToken = artifacts.require("./ProxToken.sol");
var ProxTokenSale = artifacts.require("./ProxTokenSale.sol");

module.exports = function(deployer) {
  deployer.deploy(ProxToken, 10000000000).then(function() {
    // Token price is 0.001 Ether
    var tokenPrice = 9000000000000;
    return deployer.deploy(ProxTokenSale, ProxToken.address, tokenPrice);
  });
};