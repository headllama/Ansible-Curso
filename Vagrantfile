Vagrant.configure("2") do |config|

    config.vm.box = "ubuntu/trusty64"

    config.vm.provider "virtualbox" do |v|
        v.memory = 1024
    end

    config.vm.define "ansible_php" do |m|
        m.vm.network "private_network", ip: "192.168.0.201"
    end

    config.vm.define "ansible_mysql" do |m|
        m.vm.network "private_network", ip: "192.168.0.202"
    end

end
