 PROXchain-Presale-Smart-Contracts
Public Repository for PROXcPROXchain Smart Contracts



### Contracts
The PROXchain Presale Token and Crowdsale contracts are based on open-zeppelin standard and audited contracts.

The PROXchain Presale tokens are based on the `StandardToken` and `MintableToken` ERC20 contracts.

The Crowdsale contract is inspired by the open-zeppelin `Crowdsale` contract with additional functionality mixed in.


### Presale
7,000,000,000 tokens will be issued at the price of 0.000009 ether per token. This represents a 70% discount to the PROX Token which will start from July 5th.

### Development and Testing Environment Setup

#### Requirements :
- OSX or Linux (Windows setup is likely possible but not covered in this guide)
- Node (version 8.1.0 recommended for the testing environment)
- testrpc / geth 


#### Testing Environment Setup : 

- Clone the repository and install dependencies

``` 
git clone https://github.com/claudiuok/token_prox.git
cd token_prox
npm install
```

- Install the latest version of truffle

```
npm install -g truffle
```

- Compile contracts
```
truffle compile
```

- Initialize testrpc (or geth)

```
testrpc
```

- Migrate contracts to chosen network

```
truffle migrate --network development
```

- Make sure you are using the latest version of node

``` 
nvm install 8.1.0
nvm use 8.1.0
```


- Fill in `truffle.js` and `deploy_contracts.js` with appropriate wallet addresses. Unlock the corresponding addresses.

- Verify all tests are passing

```
truffle test
```

- You can interact with the contracts via the console 

```
truffle console
```



