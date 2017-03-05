# Ansible-drupal Role

Ansible's Role to install secure LEMP stack + drupal + civiCRM. 

## Requirements

1. `python-dev` 
2. `python-pip`
3. `python-openssl`
4. `ansible 2.2+`

## Setup

### Install ansible & dependencies

1. `git clone https://github.com/mauhftw/ansible-drupal`
2. `chmod +x setup_ansible.sh`
3. `sudo ./setup_ansible.sh`

## Roles

Ansible-drupal contains the following roles:

- common
- ufw
- ssh
- no_spoofing
- fail2ban
- sendmail
- letsencrypt
- nginx
- mysql
- php
- drupal
- civicrm
- backup


## Ansible vault

Ansible-Vault is a feature of ansible that allows keeping sensitive data such as passwords or keys in encrypted files, rather than as plaintext in your playbooks or roles. To edit the vault file, please use the following command

- `$ ansible-vault edit vault_password.txt`

ENTER your VAULT PASSWORD: supersecret2314! (in this example)
 
And then you can edit your encrypted vars.

If you want to use vault, please use the following flag `--ask-vault-pass ` or for automating processing place the password in a file and use `-vault-password-file=/path/to/vault_file ` flag

### Changing vault password

If you wish to change your password on a vault-encrypted file or files, you can do so with the rekey command:

- `$ ansible-vault rekey vault_password.txt`

For more information, please check ansible-vault docs: 

## Usage

- `$ ansible-playbook -i hosts/testing.yml master.yml --ask-become-pass --vault-password-file=vault_password.txt`
