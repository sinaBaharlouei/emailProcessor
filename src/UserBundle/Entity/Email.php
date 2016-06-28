<?php
namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use UserBundle\Entity\Constants\RoleConstants;
use UserBundle\Entity\Constants\UserConstants;
use UserBundle\Entity\User;

/**
 * UserBundle\Entity\Email
 *
 * @ORM\Table(name="Email")
 * @ORM\Entity(repositoryClass="UserBundle\Entity\Repository\EmailRepository")
 */
class Email implements \JsonSerializable
{

	/**
	 * @ORM\Column(type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(name="name", type="string", length=128, nullable=true)
	 */
	private $title;

	/**
	 * @ORM\Column(name="content", type="text", length=128, nullable=true)
	 */
	private $text;

	/**
	 * @ORM\Column(name="created_at", type="datetime")
	 */
	private $createdAt = NULL;

	
	/**
	 * @ORM\Column(name="is_read", type="integer", nullable=false)
	 */
	private $isRead;

	/**
	 * @ORM\Column(name="is_spam", type="integer", nullable=false)
	 */
	private $isSpam;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="sentEmails")
	 * @ORM\JoinColumn(name="sender_id", referencedColumnName="id", nullable=false)
	 */
	protected $sender;

	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="receivedEmails")
	 * @ORM\JoinColumn(name="receiver_id", referencedColumnName="id", nullable=false)
	 */
	protected $receiver;


	/**
	 * (PHP 5 &gt;= 5.4.0)<br/>
	 * Specify data which should be serialized to JSON
	 * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
	 * @return mixed data which can be serialized by <b>json_encode</b>,
	 * which is a value of any type other than a resource.
	 */
	function jsonSerialize()
	{
		// TODO: Implement jsonSerialize() method.
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Email
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Email
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Email
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set isRead
     *
     * @param integer $isRead
     * @return Email
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;

        return $this;
    }

    /**
     * Get isRead
     *
     * @return integer 
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set isSpam
     *
     * @param integer $isSpam
     * @return Email
     */
    public function setIsSpam($isSpam)
    {
        $this->isSpam = $isSpam;

        return $this;
    }

    /**
     * Get isSpam
     *
     * @return integer 
     */
    public function getIsSpam()
    {
        return $this->isSpam;
    }

    /**
     * Set sender
     *
     * @param User $sender
     * @return Email
     */
    public function setSender(User $sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param User $receiver
     * @return Email
     */
    public function setReceiver(User $receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
}
