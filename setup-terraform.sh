#!/bin/bash
# author nick.fabricius
# created: 2024-10-02
# WSL mit Azure-CLI und Terraform

if [ "$EUID" -ne 0 ]; then 
    echo "Please run with sudo" exit
fi
if ! echo $PATH | grep -q "/usr/local/bin"; then 
    echo 'export PATH="$PATH:/usr/local/bin"' >> ~/.bashrc
else 
    echo "$PATH bereits angepasst" 
fi
echo -n "Installiere Azure-CLI" curl -sL https://aka.ms/InstallAzureCLIDeb | sudo bash
az --version
curl -L -o terraform.sample.zip https://releases.hashicorp.com/terraform/1.9.6/terraform_1.9.6_linux_amd64.zip
unzip terraform.sample.zip
rm LICENSE.txt
mv terraform /usr/local/bin/terraform
chmod +x /usr/local/bin/terraform
rm -f terraform.sample.zip
/usr/local/bin/terraform --version