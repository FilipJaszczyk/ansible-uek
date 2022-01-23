To run wordpress installation run
```
ansible-playbook -i hosts.ini setup_wp.yaml
```
Screenshot with working example
<img src="./static/wp_proof.png">

To run application with loadbalancer
```
ansible-playbook -i hosts.ini setup_ecommerce.yaml
```
Screenshot with working loadbalancer example
<img src="./static/load_balancer.png">